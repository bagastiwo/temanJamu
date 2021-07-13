<?php
class ProdukFranchise_front_model extends CI_Model
{
    private $table = 'produkfranchise';
    private $primary_key = 'id_franchise';

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
