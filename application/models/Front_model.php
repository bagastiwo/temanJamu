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
        $this->db->select('*');
        $this->db->from('produkjamu');
        $this->db->order_by('rand()');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }

    public function getID($id)
    {
        return $this->db->get_where($this->table, array($this->primary_key => $id))->result();
    }
}
