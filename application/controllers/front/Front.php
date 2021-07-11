<?php

class Front extends CI_Controller
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
        $data['contents'] = 'front/front/front_view';
        $this->load->view('front/front/front_view', $data);
    }

}
