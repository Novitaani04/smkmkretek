<?php
class JurusanModel extends CI_Model 
{
    public function select_all_jurusan()
    {
        // menampilkan semua kolom
        $this->db->select('*');
        // didalam table jurusan
        $this->db->from('jurusan');
        // ambil result datanya
        $query = $this->db->get();
        // kemudian kembalikan nilai dalam bentuk result(array/assoc)
        return $query->result();
    }
    public function select_jurusan_by($where)
    {
         // menampilkan semua kolom
         $this->db->select('*');
         $this->db->where($where);
         // didalam table siswa
         $this->db->from('jurusan');
         // ambil result datanya
         $query = $this->db->get();
         // kemudian kembalikan nilai dalam bentuk row yaitu hanya menampilkan 1 data saja
         return $query->row();
    }
    public function insertData($column)
    {
        // proses insert data ke database
        $this->db->insert('jurusan',$column);
        // return hasil insert apakah berhasil atau tidak
        return $this->db->affected_rows();
    }
    public function editData($where, $column)
    {
        // where dengan nama kolomnya 
        $this->db->where($where);
        // nama table
        $this->db->update("jurusan", $column);
        return $this->db->affected_rows();
    }
    public function hapusData($where)
    {
        // where dengan nama kolomnya 
         $this->db->where ($where);
        // nama table
        $this->db->delete("jurusan");
        return $this->db->affected_rows();
    }
}
?>