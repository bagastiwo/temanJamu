<?php

class Transaksi extends CI_Controller
{
    var $gallery_path;
    var $gallery_path_url;

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Transaksi_model');
        $this->load->library('Form_validation');
        $this->gallery_path = realpath(APPPATH . '../upload/product/');
        $this->gallery_path_url = base_url() . 'upload/product/';
    }

    public function rules()
    {
        return [
            ['field' => 'tanggal', 'label' => 'tanggal', 'rules' => 'required'],
            ['field' => 'nama_pelanggan', 'label' => 'nama_pelanggan', 'rules' => 'required'],
            ['field' => 'nama_produk', 'label' => 'nama_produk', 'rules' => 'required'],
            ['field' => 'qty', 'label' => 'qty', 'rules' => 'required'],
            ['field' => 'harga_produk', 'label' => 'harga_produk', 'rules' => 'required'],
            ['field' => 'total', 'label' => 'total', 'rules' => 'required']
        ];
    }

    public function index()
    {

        $data['Transaksi'] = $this->Transaksi_model->getAll();
        $data['contents'] = 'admin/transaksi/transaksi_view';
        $this->load->view('admin/layout/template', $data);
    }

    public function insert()
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data['contents'] = 'admin/transaksi/transaksi_insert';
            $this->load->view('admin/layout/template', $data);
        } else {
            $photo = '';
            $this->load->library('upload');
            $config['upload_path'] = './upload/product/'; // Sesuaikan sama folder dimana foto akan d simpan
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['max_size'] = '2048';
            $config['max_width']  = '1288';
            $config['max_height']  = '768';

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $photo = "";
            } else {
                $photo = $this->upload->file_name;
            }

            $data['nama_barang'] = $this->input->post('nama_barang');
            $data['harga'] = $this->input->post('harga');
            $data['stok'] = $this->input->post('stok');

            $data['gambar'] = $photo;

            $this->Barang_model->insert($data);
            $this->session->set_flashdata('pesan', '<script>alert("Data berhasil disimpan")</script>');
            redirect(base_url('index.php/admin/barang'));
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data["barang"] = $this->Barang_model->getID($id);

            $data['contents'] = 'admin/barang/barang_edit';
            $this->load->view('admin/layout/template', $data);
        } else {
            $photo = '';
            $this->load->library('upload');
            $config['upload_path'] = './upload/product/'; // Sesuaikan sama folder dimana foto akan d simpan
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['max_size'] = '2048';
            $config['max_width']  = '1288';
            $config['max_height']  = '768';

            $this->upload->initialize($config);

            $photo = $this->upload->file_name;


            $data['nama_barang'] = $this->input->post('nama_barang');
            $data['harga'] = $this->input->post('harga');
            $data['stok'] = $this->input->post('stok');

            $data['gambar'] = $photo;

            $this->Barang_model->edit($id, $data);
            $this->session->set_flashdata('pesan', '<script>alert("Data berhasil diubah")</script>');
            redirect(base_url('index.php/admin/barang'));
        }
    }

    public function delete($id)
    {
        $this->Barang_model->delete($id);
        $this->session->set_flashdata('pesan', '<script>alert("Data berhasil dihapus")</script>');
        redirect(base_url('index.php/admin/barang'));
    }
}
