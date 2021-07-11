<?php
class Front_model extends CI_Model
{
    private $table = 'produkJamu';
    private $primary_key = 'id_produk';

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
}
