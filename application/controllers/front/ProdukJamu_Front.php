<?php

class ProdukJamu_Front extends CI_Controller
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
        $data['contents'] = 'front/Produkjamu/Produkjamu_view';
        $this->load->view('front/Produkjamu/Produkjamu_view', $data);
    }

}
