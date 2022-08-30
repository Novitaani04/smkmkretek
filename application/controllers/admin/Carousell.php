<?php
class Carousell extends CI_Controller
{
  public function index()
  {
    // memanggil semua data siswa
    $datacarousell['data'] = $this->CarousellModel->select_all_carousell();
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/carousell/daftar', $datacarousell, true);
    // atur judul
    $data['title'] = "Master Carousell";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_add()

  {
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/carousell/form_add', null, true);
    // atur judul
    $data['title'] = "Form Tambah ";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_edit()
  {
    $id_carousell=$this->uri->segment(4);
    $where = [
        "id_carousell"=> $id_carousell
    ];
    $datacarousell['data_carousell'] = $this->CarousellModel->select_carousell_by($where);
    $data['page'] = $this->load->view('admin/pages/carousell/form_edit',$datacarousell,true);
    $data['title'] = "Form Edit";
    $this->load->view('admin/partial/template',$data);
    
  }
  public function edit_data()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();

    // beri nama file baru untuk file upload
    // contoh output 
    $nmFile = $data['id_carousell'] . ".png";

    // setting config uploadnya
    $config = [
      "upload_path" => "./foto/carousell", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambar hasil upload
      "allowed_types" => "jpg|jpeg|png", //menentukan extension  file yang diizinkan
      "overwrite" => TRUE, //jika pada file folder terdapat nama yang sama ,maka timpa file lama dengan file baru 
      "file_name" => $nmFile //memberi nama file sesuai dengan nama file yg sudah tertera di variabel
    ];

    // initialize config upload
    $this->upload->initialize($config);
    // melakukan proses upload
    $resultUpload = $this->upload->do_upload('foto');
    // jika hasil upload gambar itu berhasil,maka lanjutkan proses ke input data ke database
    if ($resultUpload == true) {
      // kita ambil informasi detail dari gambar yang telah kita upload
      $imageData = $this->upload->data();

      // mempersiapkan data yang akan di isi pada table master_guru
      $column = [
        "id_carousell" => $data['id_carousell'],
        "foto" => $imageData['file_name'], //ambil nama file dari gambar yang sudah di upload
        "judul" => $data['judul'],
        "deskripsi" => $data['deskripsi']
       
      ];
      $where =[
        "id_carousell" => $data['id_carousell'],
        ];
      // kirim data kolom ke insertData pada MasterguruModel
      $this->CarousellModel->editData($where, $column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
             <script>
                 alert('Data Carousell berhasil diedit')
                 window.location.href = '" . base_url('admin/Carousell/index') . "';
             </script>
             ";
    } else {
      // die($this->upload->display_errors());

      // mempersiapkan data yang akan di isi pada table master_Carousell
      $column = [
        "id_carousell" => $data['id_carousell'],
        "judul" => $data['judul'],
        "deskripsi" => $data['deskripsi']

      ];
      $where =[
        "id_carousell" => $data['id_carousell'],
        ];
      // kirim data kolom ke insertData pada MasterguruModel
      $this->CarousellModel->editData($where, $column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
          <script>
              alert('Data carousell berhasil diedit')
              window.location.href = '" . base_url('admin/Carousell/index') . "';
          </script>
          ";
    }
  }

  public function add_new_data()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();

    // beri nama file baru untuk file upload
    // contoh output 
    $nmFile = $data['id_carousell'] . ".png";

    // setting config uploadnya
    $config = [
      "upload_path" => "./foto/carousell", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambar hasil upload
      "allowed_types" => "jpg|jpeg|png", //menentukan extension  file yang diizinkan
      "overwrite" => TRUE, //jika pada file folder terdapat nama yang sama ,maka timpa file lama dengan file baru 
      "file_name" => $nmFile //memberi nama file sesuai dengan nama file yg sudah tertera di variabel
    ];

    // initialize config upload
    $this->upload->initialize($config);
    // melakukan proses upload
    $resultUpload = $this->upload->do_upload('foto');
    // jika hasil upload gambar itu berhasil,maka lanjutkan proses ke input data ke database
    if ($resultUpload == true) {
      // kita ambil informasi detail dari gambar yang telah kita upload
      $imageData = $this->upload->data();

      // mempersiapkan data yang akan di isi pada table master_guru
      $column = [
        "id_carousell" => $data['id_carousell'],
        "foto" => $imageData['file_name'], //ambil nama file dari gambar yang sudah di upload
        "judul" => $data['judul'],
        "deskripsi" => $data['deskripsi']
       
      ];
      // kirim data kolom ke insertData pada MasterguruModel
      $this->CarousellModel->insertData($column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
             <script>
                 alert('Data Carousell berhasil ditambahkan')
                 window.location.href = '" . base_url('admin/Carousell/index') . "';
             </script>
             ";
    } else {
       echo "
       <script>
           alert('". $this->upload->display_errors() ."')
           window.location.href = '".base_url('admin/Carousell/index')."';
       </script>
       ";
    

      // mempersiapkan data yang akan di isi pada table master_guru
      $column = [
        "id_carousell" => $data['id_carousell'],
        "judul" => $data['judul'],
        "deskripsi" => $data['deskripsi']
       
      ];
       
  
      // kirim data kolom ke insertData pada MasterguruModel
      $this->CarousellModel->insertData($column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
          <script>
              alert('Data Carousell berhasil ditambahkan')
              window.location.href = '" . base_url('admin/Carousell/index') . "';
          </script>
          ";
    }
  }
  public function hapus()
  {
      //segment = untuk mengambil nialai dari uri
      // contoh = admin/MasterBerita/hapus/123678
      // segments   1       2         3     4
      $id_carousell = $this->uri->segment(4);
     $where =[
          "id_carousell"=> $id_carousell
     ];
     if(file_exists('./foto/carousell/' . $id_carousell . ".png")){
        unlink('./foto/carousell/' . $id_carousell .".png");
     }

     $this->CarousellModel->hapusData($where);
     echo "
     <script>
          alert('Data Carousell berhasil dihapus')
          window.location.href='",base_url('admin/Carousell/index')."';
     </script>
       ";
  }
}
?>