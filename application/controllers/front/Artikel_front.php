<?php

class Artikel_Front extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_front_model');
    }

    public function index()
    {
        $data['artikel'] = $this->Artikel_front_model->getAll();
        $data['contents'] = 'front/artikel/artikel_view';
        $this->load->view('front/artikel/artikel_view', $data);
    }

    public function detail_artikel($id)
    {
        $data['artikel'] = $this->Artikel_front_model->detail_artikel($id);
        $this->load->view('front/artikel/detail_artikel', $data);
    }

}
