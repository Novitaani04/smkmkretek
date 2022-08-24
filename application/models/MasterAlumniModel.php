<?php
class MasterAlumniModel extends CI_Model 
{
    public function select_all_alumni()
    {
        // menampilkan semua kolom
        $this->db->select('*');
        // didalam table alumni
        $this->db->from('master_alumni');
        // ambil result datanya
        $query = $this->db->get();
        // kemudian kembalikan nilai dalam bentuk result(array/assoc)
        return $query->result();
    }
    public function select_alumni_by($where)
    {
         // menampilkan semua kolom
         $this->db->select('*');
         $this->db->where($where);
         // didalam table siswa
         $this->db->from('master_alumni');
         // ambil result datanya
         $query = $this->db->get();
         // kemudian kembalikan nilai dalam bentuk row yaitu hanya menampilkan 1 data saja
         return $query->row();
    }
    public function insertData($column)
    {
        // proses insert data ke database
        $this->db->insert('master_alumni',$column);
        // return hasil insert apakah berhasil atau tidak
        return $this->db->affected_rows();
    }
    public function editData($where,$column)
    {
        // where dengan nama kolomnya 
        $this->db->where($where);
        // nama table
        $this->db->update("master_alumni",$column);
        return $this->db->affected_rows();
    }
    public function hapusData($where)
    {
        // where dengan nama kolomnya 
         $this->db->where ($where);
        // nama table
        $this->db->delete("master_alumni");
        return $this->db->affected_rows();
    }
}
?>