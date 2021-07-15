<?php

class ProdukJamu_front extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProdukJamu_front_model');
        $this->load->library('Form_validation');
    }
    
    public function index()
    {
        $data['produkjamu'] = $this->ProdukJamu_front_model->getAll();
        $data['contents'] = 'front/ProdukJamu/ProdukJamu_view';
        $this->load->view('front/ProdukJamu/ProdukJamu_view', $data);
    }

}
