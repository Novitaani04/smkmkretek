<?php
class Pesan extends CI_Controller
{
  public function index()
  {
    // memanggil semua data siswa
    $dataPesan['data'] = $this->PesanModel->select_all_pesan();
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/pesan/daftar', $dataPesan, true);
    // atur judul
    $data['title'] = "Master Pesan";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_add()

  {
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/pesan/form_add', null, true);
    // atur judul
    $data['title'] = "Form Tambah ";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_edit()
  {
    $id_pesan=$this->uri->segment(4);
    $where = [
        "id_pesan"=> $id_pesan
    ];
    $datapesan['data_pesan'] = $this->PesanModel->select_pesan_by($where);
    $data['page'] = $this->load->view('admin/pages/pesan/form_edit',$datapesan,true);
    $data['title'] = "Form Edit";
    $this->load->view('admin/partial/template',$data);
    
  }
  public function add_new_data()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();
    
      $column = [
        "nama" => $data['nama'],
        "email" => $data['email'],
        "pesan" => $data['pesan']
      
       
      ];
      // kirim data kolom ke insertData pada MasterguruModel
      $insert = $this->PesanModel->insertData($column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
             <script>
                 alert('Data Pesan berhasil ditambahkan')
                 window.location.href = '" . base_url('admin/Pesan/index') . "';
             </script>
             ";
  }
  public function add_new_data_user()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();
    
      $column = [
     
        "nama" => $data['nama'],
        "email" => $data['email'],
        "pesan" => $data['pesan']
      
       
      ];
      // kirim data kolom ke insertData pada MasterguruModel
      $insert = $this->PesanModel->insertData($column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
             <script>
                 alert('Data Pesan berhasil ditambahkan')
                 window.location.href = '" . base_url('front/DataContact') . "';
             </script>
             ";
  }
  public function edit_data()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();
    
      $column = [
        "id_pesan" => $data['id_pesan'],
        "nama" => $data['nama'],
        "email" => $data['email'],
        "pesan" => $data['pesan']
       
      ];
      $where =[
        "id_pesan"=>$data['id_pesan']
      ];
      
      // kirim data kolom ke insertData pada MasterguruModel
      $insert = $this->PesanModel->editData($where, $column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
             <script>
                 alert('Data Pesan berhasil diedit')
                 window.location.href = '" . base_url('admin/Pesan/index') . "';
             </script>
             ";
  }
  public function hapus()
  {
    
      $id_pesan = $this->uri->segment(4);
     $where =[
          "id_pesan"=> $id_pesan
     ];
     
     $this->PesanModel->hapusData($where);
     echo "
     <script>
          alert('Data pesan berhasil dihapus')
          window.location.href='",base_url('admin/pesan/index')."';
     </script>
       ";
  }
}
?>