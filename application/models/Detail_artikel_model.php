<?php
class Detail_artikel_model extends CI_Model
{
    public $table = 'artikel';
    public $primary_key = 'id_artikel';

    function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function getID($id)
    {
        return $this->db->get_where($this->table, array($this->primary_key => $id))->result();
    }

    public function tampil()
    {
        $query = $this->db->get('artikel');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    function per_id($id)
    {
        $this->db->where('id_artikel', $id);
        $query = $this->db->get('artikel');
        return $query->result();
    }
}
