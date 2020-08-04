<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("/user_model");
    }

    public function register()
    {
        $this->load->view('/user/register');
    }

    public function list()
    {
        $data['users'] = $this->User_model->all();
        $this->load->view('/user/listStudents', $data);
    }

    public function Create()
    {

        $result = $this->User_model->insert($this->input->post());

        if ($result) {
            redirect(site_url(['user', 'register']));
        }
    }
}
