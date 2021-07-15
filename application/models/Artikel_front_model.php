<?php
class Artikel_front_model extends CI_Model
{
    private $table = 'artikel';
    private $primary_key = 'id_artikel';

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


    public function detail_artikel($id)
    {
      // echo "<pre>";
      // echo $id;
      // exit;
        $this->db->where('id_artikel', $id);
        $query = $this->db->get('artikel');
        return $query->result();
    }
}
