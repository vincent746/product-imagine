<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterTestimoni extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in_imagine_admin')) {
            redirect('Admin/Logout');
        }

        $this->load->model('MasterTestimoniModel');
    }

    public function index()
    {
        $data['title'] = 'Master Testimoni';
        $data['testimoni'] = $this->MasterTestimoniModel->GetAll();

        $this->load->view('master_testimoni_list', $data);
    }

    public function doAdd()
    {
        $no_urut = $this->input->post('no_urut');

        $tempUkuran = $_FILES['urlbanner']['size'];

        if ($tempUkuran > 200000) {
            $this->session->set_flashdata('error', 'Ukuran file gambar banner tidak boleh lebih dari 200 KB');
            redirect('MasterBanner');
        }

        if(isset($_FILES['urlbanner']['name'])){

            $tempFile = $_FILES['urlbanner']['tmp_name'];
            $target_dir = DOC_ROOT."assets/img/text-slider/";
            $filename = '1'.strtotime(NOW). $this->CleanString( basename( $_FILES["urlbanner"]["name"]) );

            $target_file = $target_dir . $filename;
            move_uploaded_file($tempFile, $target_file);

            $urlbanner = $filename;
        }
        else{
            $urlbanner = 'noimage.png';
        }

        $data = array(
            'no_urut' => $no_urut,
            'urlbanner' => $urlbanner,
            'is_active' => 1,
            'created_at' => NOW,
            'created_by' => $this->session->userdata('logged_in_imagine_admin')->nama_lengkap,
        );

        $this->MasterTestimoniModel->Insert($data);
        $this->session->set_flashdata('info', 'Data banner berhasil disimpan.');
        redirect('MasterBanner');
    }

    public function Edit()
    {
        $data['title'] = 'Master Banner';
        $id = $this->input->get('id');
        $data['banner'] = $this->MasterTestimoniModel->Get($id);
        $this->load->view('master_banner_edit', $data);
    }

    public function doEdit()
    {
        $id = $this->input->post('id');
        $no_urut = $this->input->post('no_urut');
        $is_active = $this->input->post('is_active');

        $banner = $this->MasterTestimoniModel->Get($id);

        if (file_exists($_FILES['urlbanner']['tmp_name']) and is_uploaded_file($_FILES['urlbanner']['tmp_name'])) {
            $tempUkuran = $_FILES['urlbanner']['size'];
        } else {
            $tempUkuran = 0;
        }

         if ($tempUkuran <= 200000) {
            if(file_exists($_FILES['urlbanner']['tmp_name']) and is_uploaded_file($_FILES['urlbanner']['tmp_name']))
            {
                if(file_exists(DOC_ROOT."assets/img/text-slider/".$banner->urlbanner) and $banner->urlbanner != 'default.png')
                {
                    unlink(DOC_ROOT."assets/img/avatar/".$banner->urlbanner);
                }
                $tempFile = $_FILES['urlbanner']['tmp_name'];
                $target_dir = DOC_ROOT."assets/img/text-slider/";
                $target_file = $target_dir . $this->CleanString(basename($_FILES["urlbanner"]["name"]) );
                move_uploaded_file($tempFile, $target_file);
                $urlbanner = ( basename( $_FILES["urlbanner"]["name"] ) == '' ? 'noimage.jpg' : $this->CleanString( basename( $_FILES["urlbanner"]["name"] ) ) );
            }
            else
            {
                $urlbanner = $banner->urlbanner;
            }

             $data = array(
                'no_urut' => $no_urut,
                'urlbanner' => $urlbanner,
                'is_active' => $is_active,
                'updated_at' => NOW,
                'updated_by' => $this->session->userdata('logged_in_imagine_admin')->nama_lengkap,
            );

            $this->MasterTestimoniModel->Update($id, $data);
            $this->session->set_flashdata('info', 'Data banner berhasil disimpan.');
            redirect('MasterBanner');
        }else {
            $this->session->set_flashdata('error', 'Jenis gambar yang anda upload tidak boleh lebih dari 200KB');
            redirect('MasterBanner/Edit');
        }

       
    }

    public function doDelete()
    {
        $id = $this->input->get('id');

        $banner = $this->MasterTestimoniModel->Get($id);
        if(file_exists(DOC_ROOT."assets/img/text-slider/".$banner->urlbanner) and $banner->urlbanner != 'default.png')
            {
                unlink(DOC_ROOT."assets/img/text-slider/".$banner->urlbanner);
            }
        $this->MasterTestimoniModel->Delete($id);

        $this->session->set_flashdata('info', 'Data banner berhasil dihapus.');
        redirect('MasterBanner');
    }

    function CleanString($string)
    {
        $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.

        return preg_replace('/[^A-Za-z0-9\-._]/', '', $string); // Removes special chars.
    }
}
