<?php
class ProdukFranchise_model extends CI_Model
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

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function edit($id, $data)
    {
        $this->db->update($this->table, $data, array($this->primary_key => $id));
    }

    public function delete($id)
    {
        $this->db->delete($this->table, array($this->primary_key => $id));
    }

}
