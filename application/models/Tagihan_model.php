<?php
class Tagihan_model extends CI_Model
{
    private $table = 'transaksi';
    private $primary_key = 'id_transaksi';
    

    function __construct()
    {
        parent::__construct();
    }

    public function tabeltagihan(){
        $this->db->select('transaksi.id_transaksi, transaksi.tanggal,
        pelanggan.nama_pelanggan as a, 
        produkjamu.nama_produk as b,
        transaksi.qtyjamu as c,
        transaksi.hargajamu as d,
        produkfranchise.nama_franchise as e,
        transaksi.hargafranchise as f,
        transaksi.totalbayar as g');
        $this->db->from('transaksi');
        $this->db->join('pelanggan','pelanggan.id_pelanggan=transaksi.pelangganbeli');
        $this->db->join('produkjamu','produkjamu.id_produk=transaksi.jamu');
        $this->db->join('produkfranchise','produkfranchise.id_franchise=transaksi.franchise');
        $query = $this->db->get();
        return $query->result();
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
