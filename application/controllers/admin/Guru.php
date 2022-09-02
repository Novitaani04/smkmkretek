<?php
class Guru extends CI_Controller
{
  public function index()
  {
    // memanggil semua data siswa
    $dataguru['data'] = $this->GuruModel->select_all_guru();
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/guru/daftar', $dataguru, true);
    // atur judul
    $data['title'] = "Master guru";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_add()

  {
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/guru/form_add', null, true);
    // atur judul
    $data['title'] = "Form Tambah ";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_edit()
  {
    $nip=$this->uri->segment(4);
    $where = [
        "nip"=> $nip
    ];
    $dataguru['data_guru'] = $this->GuruModel->select_guru_by($where);
    $data['page'] = $this->load->view('admin/pages/guru/form_edit',$dataguru,true);
    $data['title'] = "Form Edit";
    $this->load->view('admin/partial/template',$data);
    
  }
  public function edit_data()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();

    // beri nama file baru untuk file upload
    // contoh output 
    $nmFile = $data['nip'] . ".png";

    // setting config uploadnya
    $config = [
      "upload_path" => "./foto/guru", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambar hasil upload
      "allowed_types" => "jpg|jpeg|png", //menentukan extension  file yang diizinkan
      "overwrite" => TRUE, //jika pada file folder terdapat nama yang sama ,maka timpa file lama dengan file baru 
      "file_name" => $nmFile //memberi nama file sesuai dengan nama file yg sudah tertera di variabel
    ];

    // initialize config upload
    $this->upload->initialize($config);
    // melakukan proses upload
    $resultUpload = $this->upload->do_upload('passfoto');
    // jika hasil upload gambar itu berhasil,maka lanjutkan proses ke input data ke database
    if ($resultUpload == true) {
      // kita ambil informasi detail dari gambar yang telah kita upload
      $imageData = $this->upload->data();

      // mempersiapkan data yang akan di isi pada table master_guru
      $column = [
        "nip" => $data['nip'],
        "nama" => $data['nama'],
        "tempat" => $data['tempat'],
        "tanggal_lahir" => $data['tanggal_lahir'],
        "mapel" => $data['mapel'],
        "alamat" => $data['alamat'],
        "jk" => $data['jk'],
        "status_kepegawaian" => $data['status_kepegawaian'],
        "passfoto" => $imageData['file_name'] //ambil nama file dari gambar yang sudah di upload
      ];
      $where =[
        "nip" => $data['nip'],
        ];
      // kirim data kolom ke insertData pada MasterguruModel
      $this->GuruModel->editData($where, $column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
             <script>
                 alert('Data guru berhasil diedit')
                 window.location.href = '" . base_url('admin/Guru/index') . "';
             </script>
             ";
    } else {
      // die($this->upload->display_errors());

      // mempersiapkan data yang akan di isi pada table master_guru
      $column = [
        "nip" => $data['nip'],
        "nama" => $data['nama'],
        "tempat" => $data['tempat'],
        "tanggal_lahir" => $data['tanggal_lahir'],
        "mapel" => $data['mapel'],
        "alamat" => $data['alamat'],
        "jk" => $data['jk'],
        "status_kepegawaian" => $data['status_kepegawaian'],

      ];
      $where =[
        "nip" => $data['nip'],
        ];
      // kirim data kolom ke insertData pada MasterguruModel
      $this->GuruModel->editData($where, $column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
          <script>
              alert('Data guru berhasil diedit')
              window.location.href = '" . base_url('admin/Guru/index') . "';
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
    $nmFile = $data['nip'] . ".png";

    // setting config uploadnya
    $config = [
      "upload_path" => "./foto/guru", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambar hasil upload
      "allowed_types" => "jpg|jepg|png", //menentukan extension  file yang diizinkan
      "overwrite" => TRUE, //jika pada file folder terdapat nama yang sama ,maka timpa file lama dengan file baru 
      "file_name" => $nmFile //memberi nama file sesuai dengan nama file yg sudah tertera di variabel
    ];

    // initialize config upload
    $this->upload->initialize($config);
    // melakukan proses upload
    $resultUpload = $this->upload->do_upload('passfoto');
    // jika hasil upload gambar itu berhasil,maka lanjutkan proses ke input data ke database
    if ($resultUpload == true) {
      // kita ambil informasi detail dari gambar yang telah kita upload
      $imageData = $this->upload->data();

      // mempersiapkan data yang akan di isi pada table master_guru
      $column = [
        "nip" => $data['nip'],
        "nama" => $data['nama'],
        "tempat" => $data['tempat'],
        "tanggal_lahir" => $data['tanggal_lahir'],
        "mapel" => $data['mapel'],
        "alamat" => $data['alamat'],
        "jk" => $data['jk'],
        "status_kepegawaian" => $data['status_kepegawaian'],
        "passfoto" => $imageData['file_name'] //ambil nama file dari gambar yang sudah di upload
      ];
      // kirim data kolom ke insertData pada MasterguruModel
      $insert = $this->GuruModel->insertData($column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
             <script>
                 alert('Data guru berhasil ditambahkan')
                 window.location.href = '" . base_url('admin/guru/index') . "';
             </script>
             ";
    } else {
       echo "
       <script>
           alert('". $this->upload->display_errors() ."')
           window.location.href = '".base_url('admin/Guru/index')."';
       </script>
       ";
    

      // mempersiapkan data yang akan di isi pada table master_guru
      $column = [
        "nip" => $data['nip'],
        "nama" => $data['nama'],
        "tempat" => $data['tempat'],
        "tanggal_lahir" => $data['tanggal_lahir'],
        "mapel" => $data['mapel'],
        "alamat" => $data['alamat'],
        "jk" => $data['jk'],
        "status_kepegawaian" => $data['status_kepegawaian'],
        
       //ambil nama file dari gambar yang sudah di upload
      ];
      // kirim data kolom ke insertData pada MasterguruModel
      $insert = $this->GuruModel->insertData($column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
          <script>
              alert('Data guru berhasil ditambahkan')
              window.location.href = '" . base_url('admin/Guru/index') . "';
          </script>
          ";
    }
  }
  public function hapus()
  {
      //segment = untuk mengambil nialai dari uri
      // contoh = admin/MasterBerita/hapus/123678
      // segments   1       2         3     4
      $nip = $this->uri->segment(4);
     $where =[
          "nip"=> $nip
     ];
     if(file_exists('./foto/guru/' . $nip . ".png")){
        unlink('./foto/guru/' . $nip .".png");
     }

     $this->GuruModel->hapusData($where);
     echo "
     <script>
          alert('Data guru berhasil dihapus')
          window.location.href='",base_url('admin/Guru/index')."';
     </script>
       ";
  }
}
?>