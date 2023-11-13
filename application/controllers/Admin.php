<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
    }

    public function index()
    {


        $data['title'] = 'Admin Login';
        $this->load->view('admin_login', $data);
    }

    public function Login()
    {

        $userlogin = $this->input->post('username');
        $password = $this->input->post('password');
        $berhasil = $this->AdminModel->CheckLogin($userlogin, $password);

        if ($berhasil) {

            $userlogin = $this->AdminModel->GetUserLogin($userlogin, $password);

            if ($userlogin->is_active == 0) {
                $this->session->set_flashdata('error', 'Akun admin anda tidak aktif.');
                redirect('Admin');
            }

            $this->session->set_userdata('logged_in_imagine_admin', $userlogin);
            $data = array(
                "last_login" => NOW,
            );

            $this->AdminModel->Update($userlogin->id, $data);
            redirect('Admin/Dashboard');
        } else {
            $this->session->set_flashdata('error', 'Mohon Maaf Untuk Username / Password Anda Salah, harap cek kembali.');
            redirect('Admin');
        }
    }

    public function Logout()
    {
        $this->session->unset_userdata('logged_in_imagine_admin');
        $this->session->sess_destroy();
        redirect('Admin', 'refresh');
    }

    public function Dashboard()
    {
        if (!$this->session->userdata('logged_in_imagine_admin')) {
            redirect('Admin/Logout');
        }

        $data['title'] = 'Admin Dashboard';

        $this->load->view('admin_dashboard', $data);
    }

    public function Master()
    {
        if (!$this->session->userdata('logged_in_imagine_admin')) {
            redirect('Admin/Logout');
        }

        $data['title'] = 'Master Admin';

        $data['listuser'] = $this->AdminModel->getalladmin();
        $this->load->view('master_admin_list', $data);
    }

    public function doAdd()
    {
        if (!$this->session->userdata('logged_in_imagine_admin')) {
            redirect('Admin/Logout');
        }
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $email = $this->input->post('email');

        $sudah_ada = $this->AdminModel->CheckUsername($username);
        if ($sudah_ada) {
            $this->session->set_flashdata('error', 'Username sudah digunakan.');
            redirect('Admin/Master');
        }

        $data = array(
            'username' => $username,
            'password' => md5($password),
            'nama_lengkap' => $nama_lengkap,
            'email' => $email,
            'created_at' => NOW,
            'created_by' => $this->session->userdata('logged_in_imagine_admin')->nama_lengkap,
        );

        $this->AdminModel->Insert($data);
        $this->session->set_flashdata('info', 'Data admin berhasil disimpan.');
        redirect('Admin/Master');
    }

    public function Edit()
    {
        if (!$this->session->userdata('logged_in_imagine_admin')) {
            redirect('Admin/Logout');
        }
        $data['title'] = 'Master Admin';
        $id = $this->input->get('id');
        $data['admin'] = $this->AdminModel->Get($id);

        $this->load->view('master_admin_edit', $data);
    }

    public function doEdit()
    {
        if (!$this->session->userdata('logged_in_imagine_admin')) {
            redirect('Admin/Logout');
        }
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $email = $this->input->post('email');
        $is_active = $this->input->post('is_active');

        $data = array(
            'username' => $username,
            'nama_lengkap' => $nama_lengkap,
            'email' => $email,
            'is_active' => $is_active,
            'updated_at' => NOW,
            'updated_by' => $this->session->userdata('logged_in_imagine_admin')->nama_lengkap,
        );

        $this->AdminModel->Update($id, $data);
        $this->session->set_flashdata('info', 'Data admin berhasil disimpan.');
        redirect('Admin/Master');
    }

    public function doDelete()
    {
        if (!$this->session->userdata('logged_in_imagine_admin')) {
            redirect('Admin/Logout');
        }
        $id = $this->input->get('id');

        $this->AdminModel->Delete($id);

        $this->session->set_flashdata('info', 'Data admin berhasil dihapus.');
        redirect('Admin/Master');
    }

    public function GantiFoto()
    {
        $userlogin = $this->AdminModel->Get($this->session->userdata('logged_in_imagine_admin')->id);

        if (file_exists($_FILES['avatar']['tmp_name']) and is_uploaded_file($_FILES['avatar']['tmp_name'])) {
            $tempUkuran = $_FILES['avatar']['size'];
        } else {
            $tempUkuran = 0;
        }

        if ($tempUkuran <= 200000) {
            if(file_exists($_FILES['avatar']['tmp_name']) and is_uploaded_file($_FILES['avatar']['tmp_name']))
            {
                if(file_exists(DOC_ROOT."assets/img/avatar/".$userlogin->avatar) and $userlogin->avatar != 'default.png')
                {
                    unlink(DOC_ROOT."assets/img/avatar/".$userlogin->avatar);
                }
                $tempFile = $_FILES['avatar']['tmp_name'];
                $target_dir = DOC_ROOT."assets/img/avatar/";
                $target_file = $target_dir . $this->CleanString(basename($_FILES["avatar"]["name"]) );
                move_uploaded_file($tempFile, $target_file);
                $avatar = ( basename( $_FILES["avatar"]["name"] ) == '' ? 'noimage.jpg' : $this->CleanString( basename( $_FILES["avatar"]["name"] ) ) );
            }
            else
            {
                $avatar = $userlogin->avatar;
            }

            $data = array(
                'avatar' => $avatar
                
            );
            $this->AdminModel->Update($this->session->userdata('logged_in_imagine_admin')->id, $data);
            $this->session->set_flashdata('info','Foto baru berhasil disimpan.');

            $userlogin = $this->AdminModel->Get($this->session->userdata('logged_in_imagine_admin')->id);
            $this->session->set_userdata('logged_in_imagine_admin', $userlogin);

            redirect('Admin/Dashboard');
        }else {
            $this->session->set_flashdata('error', 'Jenis gambar yang anda upload tidak boleh lebih dari 200KB');
            redirect('Admin/Dashboard');
        }

       
    }

    public function doChangePassword()
    {
        if (!$this->session->userdata('logged_in_imagine_admin')) {
            redirect('Admin/Logout');
        }

        if ($this->input->post('old_password') == '' or $this->input->post('new_password') == '' or $this->input->post('confirm_password') == '') {
            $this->session->set_flashdata('error', 'Semua isian harus diisi.');
            redirect('Admin/Dashboard');
        } else {
            // cek password lama
            $passwordlama = $this->session->userdata('logged_in_imagine_admin')->password;
            if ($passwordlama != md5(rtrim($this->input->post('old_password')))) {
                $this->session->set_flashdata('error', 'Password lama salah.');
                redirect('Admin/Dashboard');
            }

            // cek password baru dengan confirm harus sama
            if (rtrim($this->input->post('new_password')) != rtrim($this->input->post('confirm_password'))) {
                $this->session->set_flashdata('error', 'Konfirmasi password salah.');
                redirect('Admin/Dashboard');
            }

            // update password dan relogin diharuskan
            $data = array(
                'password' => md5(rtrim($this->input->post('new_password')))
            );

            $this->AdminModel->Update($this->session->userdata('logged_in_imagine_admin')->id, $data);
            $this->session->set_flashdata('info', 'Password baru berhasil disimpan.');
            redirect('Admin/Dashboard');
        }
    }

    function CleanString($string) {
       $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.

       return preg_replace('/[^A-Za-z0-9\-._]/', '', $string); // Removes special chars.
    }
}