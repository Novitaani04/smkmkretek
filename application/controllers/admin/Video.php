<?php
class Video extends CI_Controller
{
  public function index()
  {
    // memanggil semua data siswa
    $dataVideo['data'] = $this->VideoModel->select_all_video();
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/video/daftar', $dataVideo, true);
    // atur judul
    $data['title'] = "Master Video";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_add()

  {
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/video/form_add', null, true);
    // atur judul
    $data['title'] = "Form Tambah ";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_edit()
  {
    $id_video=$this->uri->segment(4);
    $where = [
        "id_video"=> $id_video
    ];
    $dataVideo['data_video'] = $this->VideoModel->select_video_by($where);
    $data['page'] = $this->load->view('admin/pages/video/form_edit',$dataVideo,true);
    $data['title'] = "Form Edit";
    $this->load->view('admin/partial/template',$data);
    
  }
  public function add_new_data()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();
    
      $column = [
        "id_video" => $data['id_video'],
        "judul_video" => $data['judul_video'],
        "background" => $data['background']
       
        
      ];
      // kirim data kolom ke insertData pada MasterguruModel
      $this->VideoModel->insertData($column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
             <script>
                 alert('Data Video berhasil ditambahkan')
                 window.location.href = '" . base_url('admin/Video/index') . "';
             </script>
             ";
  }
  public function edit_data()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();
    
      $column = [
        "id_video" => $data['id_video'],
        "judul_video" => $data['judul_video'],
        "background" => $data['background'],
      
       
       
      ];
      $where =[
        "id_video"=>$data['id_video']
      ];
      
      // kirim data kolom ke insertData pada MasterguruModel
       $this->VideoModel->editData($where, $column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
             <script>
                 alert('Data Video berhasil diedit')
                 window.location.href = '" . base_url('admin/Video/index') . "';
             </script>
             ";
  }
  public function hapus()
  {
    
      $id_video = $this->uri->segment(4);
     $where =[
          "id_video"=> $id_video
     ];
     
     $this->VideoModel->hapusData($where);
     echo "
     <script>
          alert('Data Video berhasil dihapus')
          window.location.href='",base_url('admin/Video/index')."';
     </script>
       ";
  }
}
?>