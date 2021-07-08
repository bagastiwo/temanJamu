<?php
class Data_user_model extends CI_Model
{
    private $table = 'user';
    private $primary_key = 'userid';

    function __construct()
    {
        parent::__construct();
    }

    public function getAll(){
        return $this->db->get($this->table)->result();
    }

    public function getID($id){
        return $this->db->get_where($this->table, array($this->primary_key => $id)) ->result();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function edit($id, $data){
        $this->db->update($this->table, $data, array($this->primary_key => $id));
    }

    public function delete($id){
        $this->db->delete($this->table, array($this->primary_key => $id));
    }

    
}
