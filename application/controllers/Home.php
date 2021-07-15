<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Front_model');
        $this->load->library('Form_validation');
    }

    public function index()
    {
        $data['produkjamu'] = $this->Front_model->getAll();
        $data['contents'] = 'home';
        $this->load->view('home', $data);
    }

}
