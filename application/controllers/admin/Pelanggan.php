<?php

class Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggan_model');
        $this->load->library('Form_validation');
    }

    public function rules()
    {
        return [
            ['field' => 'nik_pelanggan', 'label' => 'nik_pelanggan', 'rules' => 'required'],
            ['field' => 'nama_pelanggan', 'label' => 'nama_pelanggan', 'rules' => 'required'],
            ['field' => 'hp_pelanggan', 'label' => 'hp_pelanggan', 'rules' => 'required'],
            ['field' => 'email_pelanggan', 'label' => 'email_pelanggan', 'rules' => 'required'],
            ['field' => 'alamat_pelanggan', 'label' => 'alamat_pelanggan', 'rules' => 'required']
        ];
    }

    public function index()
    {
        $data['pelanggan'] = $this->Pelanggan_model->getAll();
        $data['contents'] = 'admin/pelanggan/pelanggan_view';
        $this->load->view('admin/layout/template', $data);
    }

    

    public function insert()
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data['contents'] = 'admin/pelanggan/pelanggan_insert';
            $this->load->view('admin/layout/template', $data);
        } else {
            $data['nik_pelanggan'] = $this->input->post('nik_pelanggan');
            $data['nama_pelanggan'] = $this->input->post('nama_pelanggan');
            $data['hp_pelanggan'] = $this->input->post('hp_pelanggan');
            $data['email_pelanggan'] = $this->input->post('email_pelanggan');
            $data['alamat_pelanggan'] = $this->input->post('alamat_pelanggan');
            $this->Pelanggan_model->insert($data);
            $this->session->set_flashdata('pesan', '<script>alert("Data berhasil disimpan")</script>');
            redirect(base_url('index.php/admin/pelanggan'));
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data["pelanggan"] = $this->Pelanggan_model->getID($id);
            $data['contents'] = 'admin/pelanggan/pelanggan_edit';
            $this->load->view('admin/layout/template', $data);
        } else {
            $data['nik_pelanggan'] = $this->input->post('nik_pelanggan');
            $data['nama_pelanggan'] = $this->input->post('nama_pelanggan');
            $data['hp_pelanggan'] = $this->input->post('hp_pelanggan');
            $data['email_pelanggan'] = $this->input->post('email_pelanggan');
            $data['alamat_pelanggan'] = $this->input->post('alamat_pelanggan');
            $this->Pelanggan_model->edit($id, $data);
            $this->session->set_flashdata('pesan', '<script>alert("Data berhasil diubah")</script>');
            redirect(base_url('index.php/admin/pelanggan'));
        }
    }

    public function delete($id)
    {
        $this->Pelanggan_model->delete($id);
        $this->session->set_flashdata('pesan', '<script>alert("Data berhasil dihapus")</script>');
        redirect(base_url('index.php/admin/pelanggan'));
    }
}
