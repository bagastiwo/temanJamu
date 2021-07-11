<?php

class Tagihan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tagihan_model');
        $this->load->model('Pelanggan_model');
        $this->load->model('ProdukJamu_model');
        $this->load->model('ProdukFranchise_model');
        $this->load->library('Form_validation');
    }


    public function rules()
    {
        return [
            ['field' => 'tanggal', 'label' => 'tanggal', 'rules' => 'required'],
            ['field' => 'pelangganbeli', 'label' => 'pelangganbeli', 'rules' => 'required'],
            ['field' => 'jamu', 'label' => 'jamu', 'rules' => 'required'],
            ['field' => 'qtyjamu', 'label' => 'qtyjamu', 'rules' => 'required'],
            ['field' => 'hargajamu', 'label' => 'hargajamu', 'rules' => 'required'],
            ['field' => 'franchise', 'label' => 'franchise', 'rules' => 'required'],
            ['field' => 'hargafranchise', 'label' => 'hargafranchise', 'rules' => 'required']
        ];
    }

    public function index()
    {
        $data['tagihan'] = $this->Tagihan_model->tabeltagihan();
        $data['contents'] = 'admin/tagihan/tagihan_view';
        $this->load->view('admin/layout/template', $data);
    }


    private function listPelanggan(){
        $data_pl = $this->Pelanggan_model->getAll();
        foreach ($data_pl as $a) {
            $list_pl[$a->id_pelanggan] = $a->nama_pelanggan;
        }
        return $list_pl;
    }

    private function listprodukJamu(){
        $data_pj = $this->ProdukJamu_model->getAll();
        foreach ($data_pj as $b) {
            $list_pj[$b->id_produk] = $b->nama_produk;
        }
        return $list_pj;
    }

    private function listprodukFranchise(){
        $data_pf = $this->ProdukFranchise_model->getAll();
        foreach ($data_pf as $c) {
            $list_pf[$c->id_franchise] = $c->nama_franchise;
        }
        return $list_pf;
    }

    public function insert()
    {
        $this->form_validation->set_rules($this->rules());  
        if ($this->form_validation->run() == FALSE) {
            $data['pelangganbeli']= $this->listPelanggan();
            $data['jamu']= $this->listprodukJamu();
            $data['franchise']= $this->listprodukFranchise();
            $data['contents'] = 'admin/tagihan/tagihan_insert';
            $this->load->view('admin/layout/template', $data);
        }

        else {
            $data['tanggal'] = $this->input->post('tanggal');
            $data['pelangganbeli'] = $this->input->post('pelangganbeli');
            $data['jamu'] = $this->input->post('jamu');
            $data['qtyjamu'] = $this->input->post('qtyjamu');
            $data['hargajamu'] = $this->input->post('hargajamu');
            $data['franchise'] = $this->input->post('franchise');
            $data['hargafranchise'] = $this->input->post('hargafranchise');
            $this->Tagihan_model->insert($data);
            $this->session->set_flashdata('pesan', '<script>alert("Berhasil disimpan")</script>');
            redirect(base_url('index.php/admin/tagihan'));
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data["tagihan"] = $this->Tagihan_model->getID($id);
            $data['pelangganbeli']= $this->listPelanggan();
            $data['jamu']= $this->listprodukJamu();
            $data['franchise']= $this->listprodukFranchise();
            $data['contents'] = 'admin/tagihan/tagihan_edit';
            $this->load->view('admin/layout/template', $data);
        }

        else {

            $data['tanggal'] = $this->input->post('tanggal');
            $data['pelangganbeli'] = $this->input->post('pelangganbeli');
            $data['jamu'] = $this->input->post('jamu');
            $data['qtyjamu'] = $this->input->post('qtyjamu');
            $data['hargajamu'] = $this->input->post('hargajamu');
            $data['franchise'] = $this->input->post('franchise');
            $data['hargafranchise'] = $this->input->post('hargafranchise');
            $this->Tagihan_model->edit($id, $data);
            $this->session->set_flashdata('pesan', '<script>alert("Berhasil diubah")</script>');
            redirect(base_url('index.php/admin/tagihan'));
        }
    }

    public function delete($id)
    {
        $this->Tagihan_model->delete($id);
        $this->session->set_flashdata('pesan', '<script>alert("Berhasil dihapus")</script>');
        redirect(base_url('index.php/admin/tagihan'));
    }
}
