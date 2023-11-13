<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterQuotes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in_imagine_admin')) {
            redirect('Admin/Logout');
        }

        $this->load->model('MasterQuotesModel');
    }

    public function index()
    {
        $data['title'] = 'Master Quotes';
        $data['quotes'] = $this->MasterQuotesModel->GetAll();

        $this->load->view('master_quotes', $data);
    }

    public function doEdit()
    {
        $id = $this->input->post('id');
        $is_active = $this->input->post('is_active');
        $quotes = $this->input->post('quotes');

        $data = array(
            'is_active' => $is_active,
            'quotes' => $quotes,
            'created_at' => NOW,
            'created_by' => $this->session->userdata('logged_in_imagine_admin')->username,
        );

        $this->MasterQuotesModel->Update($id, $data);
        $this->session->set_flashdata('info', 'Data Quotes berhasil disimpan.');
        redirect('MasterQuotes');
    }

   

    function CleanString($string)
    {
        $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.

        return preg_replace('/[^A-Za-z0-9\-._]/', '', $string); // Removes special chars.
    }
}
