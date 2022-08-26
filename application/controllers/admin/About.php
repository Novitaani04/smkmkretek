<?php
class About extends CI_Controller
{
  public function index()
  {
    // memanggil semua data siswa
    $dataAbout['data'] = $this->AboutModel->select_all_about();
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/about/daftar', $dataAbout, true);
    // atur judul
    $data['title'] = "Master About";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_add()

  {
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/about/form_add', null, true);
    // atur judul
    $data['title'] = "Form Tambah ";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_edit()
  {
    $id_about=$this->uri->segment(4);
    $where = [
        "id_about"=> $id_about
    ];
    $dataAbout['data_about'] = $this->AboutModel->select_about_by($where);
    $data['page'] = $this->load->view('admin/pages/about/form_edit',$dataAbout,true);
    $data['title'] = "Form Edit";
    $this->load->view('admin/partial/template',$data);
    
  }
  public function add_new_data()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();
    
      $column = [
        "id_about" => $data['id_about'],
        "judul" => $data['judul'],
        "visi" => $data['visi'],
        "misi" => $data['misi']
       
      ];
      // kirim data kolom ke insertData pada MasterguruModel
      $insert = $this->AboutModel->insertData($column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
             <script>
                 alert('Data About berhasil ditambahkan')
                 window.location.href = '" . base_url('admin/About/index') . "';
             </script>
             ";
  }
  public function edit_data()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();
    
      $column = [
        "id_about" => $data['id_about'],
        "judul" => $data['judul'],
        "visi" => $data['visi'],
        "misi" => $data['misi']
       
      ];
      $where =[
        "id_about"=>$data['id_about']
      ];
      
      // kirim data kolom ke insertData pada MasterguruModel
      $insert = $this->AboutModel->editData($where, $column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
             <script>
                 alert('Data About berhasil diedit')
                 window.location.href = '" . base_url('admin/About/index') . "';
             </script>
             ";
  }
  public function hapus()
  {
    
      $id_about = $this->uri->segment(4);
     $where =[
          "id_about"=> $id_about
     ];
     
     $this->AboutModel->hapusData($where);
     echo "
     <script>
          alert('Data About berhasil dihapus')
          window.location.href='",base_url('admin/About/index')."';
     </script>
       ";
  }
}
?>