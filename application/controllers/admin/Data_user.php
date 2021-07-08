<?php

class Data_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_user_model');
        $this->load->library('Form_validation');
    }

    public function rules()
    {
        return [
            ['field' => 'username', 'label' => 'username', 'rules' => 'required'],
            ['field' => 'password', 'label' => 'password', 'rules' => 'required']
        ];
    }

    public function index()
    {
        $data['Data_user'] = $this->Data_user_model->getAll();
        $data['contents'] = 'admin/Data_user/Data_user_view';
        $this->load->view('admin/layout/template', $data);
    }

    public function insert()
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data['contents'] = 'admin/Data_user/Data_user_insert';
            $this->load->view('admin/layout/template', $data);
        } else {
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            $this->Data_user_model->insert($data);
            $this->session->set_flashdata('pesan', '<script>alert("Data berhasil disimpan")</script>');
            redirect(base_url('index.php/admin/Data_user'));
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data['contents'] = 'admin/Data_user/Data_user_insert';
            $this->load->view('admin/layout/template', $data);
        } else {
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            $this->Data_user_model->insert($data);
            $this->session->set_flashdata('pesan', '<script>alert("Data berhasil disimpan")</script>');
            redirect(base_url('index.php/admin/Data_user'));
        }
    }

    public function delete($id)
    {
        $this->Data_user_model->delete($id);
        $this->session->set_flashdata('pesan', '<script>alert("Data berhasil dihapus")</script>');
        redirect(base_url('index.php/admin/Data_user'));
    }
}
