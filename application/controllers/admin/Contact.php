<?php
class Contact extends CI_Controller
{
  public function index()
  {
    // memanggil semua data siswa
    $dataContact['data'] = $this->ContactModel->select_all_contact();
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/contact/daftar', $dataContact, true);
    // atur judul
    $data['title'] = "Master Contact";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_add()

  {
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/contact/form_add', null, true);
    // atur judul
    $data['title'] = "Form Tambah ";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_edit()
  {
    $id_contact=$this->uri->segment(4);
    $where = [
        "id_contact"=> $id_contact
    ];
    $datacontact['data_contact'] = $this->ContactModel->select_contact_by($where);
    $data['page'] = $this->load->view('admin/pages/contact/form_edit',$datacontact,true);
    $data['title'] = "Form Edit";
    $this->load->view('admin/partial/template',$data);
    
  }
  public function add_new_data()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();
    
      $column = [
        "id_contact" => $data['id_contact'],
        "alamat" => $data['alamat'],
        "telepon" => $data['telepon'],
        "email" => $data['email']
       
      ];
      // kirim data kolom ke insertData pada MasterguruModel
      $insert = $this->ContactModel->insertData($column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
             <script>
                 alert('Data Contact berhasil ditambahkan')
                 window.location.href = '" . base_url('admin/Contact/index') . "';
             </script>
             ";
  }
  public function edit_data()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();
    
      $column = [
        "id_contact" => $data['id_contact'],
        "alamat" => $data['alamat'],
        "telepon" => $data['telepon'],
        "email" => $data['email']
       
      ];
      $where =[
        "id_contact"=>$data['id_contact']
      ];
      
      // kirim data kolom ke insertData pada MasterguruModel
      $insert = $this->ContactModel->editData($where, $column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
             <script>
                 alert('Data Contact berhasil diedit')
                 window.location.href = '" . base_url('admin/Contact/index') . "';
             </script>
             ";
  }
  public function hapus()
  {
    
      $id_contact = $this->uri->segment(4);
     $where =[
          "id_contact"=> $id_contact
     ];
     
     $this->ContactModel->hapusData($where);
     echo "
     <script>
          alert('Data contact berhasil dihapus')
          window.location.href='",base_url('admin/contact/index')."';
     </script>
       ";
  }
}
?>