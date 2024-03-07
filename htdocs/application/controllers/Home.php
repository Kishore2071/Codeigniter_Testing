<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('home');
        $this->load->view('includes/footer');
    }

    public function create()
    {
        $this->load->model('Home_model');
        $result = $this->Home_model->insert_data();
        if($result == true) {
            $this->session->set_flashdata('message', 'Data Inserted Sucessfully');
        } else {
            $this->session->set_flashdata('message1', 'Data Not Inserted');
        }
        redirect('home');
    }

}
