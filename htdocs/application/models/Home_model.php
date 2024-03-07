<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Home_model extends CI_Model
{
    public $variable;

    public function __construct()
    {
        parent::__construct();

    }

    public function insert_data()
    {
        $interest = '';
        if(!empty($interest)) {
            $interest = implode(',', $this->input->post('interest'));
        }
        $data = array(
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'address' => $this->input->post('address'),
            'gender' => $this->input->post('gender'),
            'year' => $this->input->post('year'),
            'interest' => $interest
        );
        $this->db->insert('student_details', $data);
        return ($this->db->affected_rows()) ? true : false;
    }

}
