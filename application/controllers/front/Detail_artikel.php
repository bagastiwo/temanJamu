<?php

class Detail_artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Detail_artikel_model');
        $this->load->helper('text');
    }


    public function index()
    {
        $data['data']=$this->Detail_artikel_model->tampil();
        $this->load->view('front/artikel/detail_artikel',$data);
    }

    function selanjutnya()
    {
        $id = $this->uri->segment(3);
        $data['artikel'] = $this->Artikel_front_model->per_id($id);
        $this->load->view('front/artikel/detail_artikel', $data);
    }
}
