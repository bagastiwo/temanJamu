<?php

class Barang_Front extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_Front_model');
        $this->load->library('Form_validation');
    }

    public function rules()
    {
        return [
            ['field' => 'nama_barang', 'label' => 'nama_barang', 'rules' => 'required'],
            ['field' => 'harga', 'label' => 'harga', 'rules' => 'required'],
            ['field' => 'stok', 'label' => 'stok', 'rules' => 'required'],
            ['field' => 'id_kategori', 'label' => 'id_kategori', 'rules' => 'required'],
            ['field' => 'id_vendor', 'label' => 'id_vendor', 'rules' => 'required'],
            ['field' => 'id_supplier', 'label' => 'id_supplier', 'rules' => 'required']
        ];
    }

    public function index()
    {

        $data['barang'] = $this->Barang_Front_model->getAll();
        $data['contents'] = 'front/barang/barang_view';
        $this->load->view('front/layout/template', $data);
    }

}
