<?php

class Artikel extends CI_Controller
{
    var $gallery_path;
    var $gallery_path_url;

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Artikel_model');
        $this->load->library('Form_validation');
        $this->gallery_path = realpath(APPPATH . '../upload/product/');
        $this->gallery_path_url = base_url() . 'upload/product/';
    }

    public function rules()
    {
        return [
            ['field' => 'judul_artikel', 'label' => 'judul_artikel', 'rules' => 'required'],
            ['field' => 'isi_artikel', 'label' => 'isi_artikel', 'rules' => 'required']
        ];
    }

    public function index()
    {

        $data['artikel'] = $this->Artikel_model->getAll();
        $data['contents'] = 'admin/artikel/artikel_view';
        $this->load->view('admin/layout/template', $data);
    }

    public function insert()
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data['contents'] = 'admin/artikel/artikel_insert';
            $this->load->view('admin/layout/template', $data);
        } else {
            $photo = '';
            $this->load->library('upload');
            $config['upload_path'] = './upload/product/'; // Sesuaikan sama folder dimana foto akan d simpan
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['file_ext_tolower'] = TRUE;
            $config['overwrite'] = TRUE;
            $config['max_size'] = '3840';
            $config['max_width']  = '3840';
            $config['max_height']  = '2160';

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $photo = "";
            } else {
                $photo = $this->upload->file_name;
            }

            $data['judul_artikel'] = $this->input->post('judul_artikel');
            $data['isi_artikel'] = $this->input->post('isi_artikel');

            $data['gambar'] = $photo;

            $this->Artikel_model->insert($data);
            $this->session->set_flashdata('pesan', '<script>alert("Data berhasil disimpan")</script>');
            redirect(base_url('index.php/admin/artikel'));
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data["artikel"] = $this->Artikel_model->getID($id);

            $data['contents'] = 'admin/artikel/artikel_edit';
            $this->load->view('admin/layout/template', $data);
        } else {
            $photo = '';
            $this->load->library('upload');
            $config['upload_path'] = './upload/product/'; // Sesuaikan sama folder dimana foto akan d simpan
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['max_size'] = '3840';
            $config['max_width']  = '3840';
            $config['max_height']  = '2160';

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $photo = "";
            } else {
                $photo = $this->upload->file_name;
            }

            $photo = $this->upload->file_name;

            $data['judul_artikel'] = $this->input->post('judul_artikel');
            $data['isi_artikel'] = $this->input->post('isi_artikel');

            $data['gambar'] = $photo;

            $this->Artikel_model->edit($id, $data);
            $this->session->set_flashdata('pesan', '<script>alert("Data berhasil diubah")</script>');
            redirect(base_url('index.php/admin/artikel'));
        }
    }

    public function delete($id)
    {
        $this->Artikel_model->delete($id);
        $this->session->set_flashdata('pesan', '<script>alert("Data berhasil dihapus")</script>');
        redirect(base_url('index.php/admin/artikel'));
    }
}
