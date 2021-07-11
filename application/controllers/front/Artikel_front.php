<?php

class Artikel_Front extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_front_model');
        $this->load->library('Form_validation');
    }
    
    public function index()
    {
        $data['artikel'] = $this->Artikel_front_model->getAll();
        $data['contents'] = 'front/artikel/artikel_view';
        $this->load->view('front/artikel/artikel_view', $data);
    }

}
