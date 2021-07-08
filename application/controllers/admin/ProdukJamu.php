<?php

class ProdukJamu extends CI_Controller
{
    var $gallery_path;
    var $gallery_path_url;

    public function __construct()
    {

        parent::__construct();
        $this->load->model('ProdukJamu_model');
        $this->load->library('Form_validation');
        $this->gallery_path = realpath(APPPATH . '../upload/product/');
        $this->gallery_path_url = base_url() . 'upload/product/';
    }

    public function rules()
    {
        return [
            ['field' => 'nama_produk', 'label' => 'nama_produk', 'rules' => 'required'],
            ['field' => 'harga', 'label' => 'harga', 'rules' => 'required'],
            ['field' => 'gambar', 'label' => 'gambar', 'rules' => 'required'],
            ['field' => 'khasiat', 'label' => 'khasiat', 'rules' => 'required'],
            ['field' => 'stok', 'label' => 'stok', 'rules' => 'required']
        ];
    }

    public function index()
    {

        $data['produkJamu'] = $this->ProdukJamu_model->getAll();
        $data['contents'] = 'admin/produkJamu/produkJamu_view';
        $this->load->view('admin/layout/template', $data);
    }

    public function insert()
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data['contents'] = 'admin/produkJamu/produkJamu_insert';
            $this->load->view('admin/layout/template', $data);
        } else {
            $photo = '';
            $this->load->library('upload');
            $config['upload_path'] = './upload/product/'; // Sesuaikan sama folder dimana foto akan d simpan
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['file_ext_tolower'] = TRUE;
            $config['overwrite'] = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $photo = "";
            } else {
                $photo = $this->upload->file_name;
            }

            $data['nama_produk'] = $this->input->post('nama_produk');
            $data['harga'] = $this->input->post('harga');
            $data['stok'] = $this->input->post('stok');
            $data['khasiat'] = $this->input->post('khasiat');

            $data['gambar'] = $photo;

            $this->ProdukJamu_model->insert($data);
            $this->session->set_flashdata('pesan', '<script>alert("Data berhasil disimpan")</script>');
            redirect(base_url('index.php/admin/produkJamu'));
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data["produkJamu"] = $this->ProdukJamu_model->getID($id);

            $data['contents'] = 'admin/produkJamu/produkJamu_edit';
            $this->load->view('admin/layout/template', $data);
        } else {
            $photo = '';
            $this->load->library('upload');
            $config['upload_path'] = './upload/product/'; // Sesuaikan sama folder dimana foto akan d simpan
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['file_ext_tolower'] = TRUE;
            $config['overwrite'] = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $photo = "";
            } else {
                $photo = $this->upload->file_name;
            }


            $data['nama_produk'] = $this->input->post('nama_produk');
            $data['harga'] = $this->input->post('harga');
            $data['stok'] = $this->input->post('stok');
            $data['khasiat'] = $this->input->post('khasiat');

            $data['gambar'] = $photo;

            $this->ProdukJamu_model->edit($id, $data);
            $this->session->set_flashdata('pesan', '<script>alert("Data berhasil diubah")</script>');
            redirect(base_url('index.php/admin/produkJamu'));
        }
    }

    public function delete($id)
    {
        $this->ProdukJamu_model->delete($id);
        $this->session->set_flashdata('pesan', '<script>alert("Data berhasil dihapus")</script>');
        redirect(base_url('index.php/admin/produkJamu'));
    }
}
