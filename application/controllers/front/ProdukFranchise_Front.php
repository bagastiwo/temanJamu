<?php

class ProdukFranchise_front extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProdukFranchise_front_model');
        $this->load->library('Form_validation');
    }
    
    public function index()
    {
        $data['produkfranchise'] = $this->ProdukFranchise_front_model->getAll();
        $data['contents'] = 'front/ProdukFranchise/ProdukFranchise_view';
        $this->load->view('front/ProdukFranchise/ProdukFranchise_view', $data);
    }

}
