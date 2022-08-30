<?php
class MasterSiswa extends CI_Controller
{
  public function index()
  {
    // memanggil semua data siswa
    $dataSiswa['data'] = $this->MasterSiswaModel->select_all_siswa();
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/master_siswa/daftar', $dataSiswa, true);
    // atur judul
    $data['title'] = "Master Siswa";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_add()

  {
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/master_siswa/form_add', null, true);
    // atur judul
    $data['title'] = "Form Tambah Siswa";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_edit()
  {
    $nik=$this->uri->segment(4);
    $where = [
        "nik"=> $nik
    ];
    $dataSiswa['data_siswa'] = $this->MasterSiswaModel->select_siswa_by($where);
    $data['page'] = $this->load->view('admin/pages/master_siswa/form_edit',$dataSiswa,true);
    $data['title'] = "Form Edit";
    $this->load->view('admin/partial/template',$data);
    
  }
  public function edit_data()
  {   
    // menerima data formulir dari halaman form_add
      $data = $this->input->post();

      $nmFile = $data['nik'] . ".png";

      // setting config uploadnya
      $config = [
          "upload_path"=>"./foto/images", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambaha hasil upload
          "allowed_types" => "jpg|jpeg|png",//menentukan extension  file yang diizinkan
          "overwrite" => TRUE,//jika pada file folder terdapat nama yang sama ,maka timpa file lama dengan file baru 
          "file_name" => $nmFile //memberi nama file sesuai dengan nama file yg sudah tertera di variabel
      ];

      // initialize config upload
      $this->upload->initialize($config);
      // melakukan proses upoad
      $resultUpload = $this->upload->do_upload('passfoto');
      // jika hasil upload gambar itu berhasil,maka lanjutkan proses ke input data ke database
      if($resultUpload == true){
          $imageUpload = $this->upload->data();
          // mempersiapkan data yang akan di isi pada table master_siswa
          $column = [
              "nik" => $data['nik'],
              "nama_siswa" => $data['nama_siswa'],
              "jk" => $data['jk'],
              "jurusan" => $data['jurusan'],
              "alamat" => $data['alamat'],
              "passfoto" => $imageUpload['file_name'] //ambil nama file dari gambar yang sudah di upload
          ];

          $where =[
              "nik" => $data['nik_lama'],
              ];

          // kirim data kolom ke insertData pada MasterSiswaModel
          $this->MasterSiswaModel->editData($where,$column);
          
          // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
          // setelah itu pindah ke halaman utama pada controller MasterSiswa
          echo "
          <script>
              alert('Data siswa berhasil diubahkan')
              window.location.href = '".base_url('admin/MasterSiswa/index')."';
          </script>
          ";
      }else {
          $column = [
              "nik" => $data['nik'],
              "nama_siswa" => $data['nama_siswa'],
              "jk" => $data['jk'],
              "jurusan" => $data['jurusan'],
              "alamat" => $data['alamat'],
          ];

          $where =[
              "nik" => $data['nik_lama'],
              ];

          // kirim data kolom ke insertData pada MasterSiswaModel
           $this->MasterSiswaModel->editData($where,$column);
          
          // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
          // setelah itu pindah ke halaman utama pada controller MasterSiswa
          echo "
          <script>
              alert('Data siswa berhasil diubahkan')
              window.location.href = '".base_url('admin/MasterSiswa/index')."';
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
    $nmFile = $data['nik'] . ".png";

    // setting config uploadnya
    $config = [
      "upload_path" => "./foto/images", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambar hasil upload
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

      // mempersiapkan data yang akan di isi pada table master_siswa
      $column = [
        "nik" => $data['nik'],
        "nama_siswa" => $data['nama_siswa'],
        "jk" => $data['jk'],
        "jurusan" => $data['jurusan'],
        "alamat" => $data['alamat'],
        "passfoto" => $imageData['file_name'] //ambil nama file dari gambar yang sudah di upload
      ];
      // kirim data kolom ke insertData pada MasterSiswaModel
      $this->MasterSiswaModel->insertData($column);

      // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller MasterSiswa
      echo "
             <script>
                 alert('Data siswa berhasil ditambahkan')
                 window.location.href = '" . base_url('admin/MasterSiswa/index') . "';
             </script>
             ";
    } else {
       echo "
       <script>
           alert('". $this->upload->display_errors() ."')
           window.location.href = '".base_url('admin/MasterSiswa/index')."';
       </script>
       ";

      // mempersiapkan data yang akan di isi pada table master_siswa
      $column = [
        "nik" => $data['nik'],
        "nama_siswa" => $data['nama_siswa'],
        "jk" => $data['jk'],
        "jurusan" => $data['jurusan'],
        "alamat" => $data['alamat'],
        "passfoto" => "placeholder.jpg" //ambil nama file dari gambar yang sudah di upload
      ];
      // kirim data kolom ke insertData pada MasterSiswaModel
      $this->MasterSiswaModel->insertData($column);

      // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller MasterSiswa
      echo "
          <script>
              alert('Data siswa berhasil ditambahkan')
              window.location.href = '" . base_url('admin/MasterSiswa/index') . "';
          </script>
          ";
    }
  }
  public function add_new_data_siswa()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();

    // beri nama file baru untuk file upload
    // contoh output 
    $nmFile = $data['nik'] . ".png";

    // setting config uploadnya
    $config = [
      "upload_path" => "./foto/images", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambar hasil upload
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

      // mempersiapkan data yang akan di isi pada table master_siswa
      $column = [
        "nik" => $data['nik'],
        "nama_siswa" => $data['nama_siswa'],
        "jk" => $data['jk'],
        "jurusan" => $data['jurusan'],
        "alamat" => $data['alamat'],
        "passfoto" => $imageData['file_name'] //ambil nama file dari gambar yang sudah di upload
      ];
      // kirim data kolom ke insertData pada MasterSiswaModel
       $this->MasterSiswaModel->insertData($column);

      // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller MasterSiswa
      echo "
             <script>
                 alert('Data siswa berhasil ditambahkan')
                 window.location.href = '" . base_url('front/Home/index') . "';
             </script>
             ";
    } else {
       echo "
       <script>
           alert('". $this->upload->display_errors() ."')
           window.location.href = '".base_url('front/Home/index')."';
       </script>
       ";

      // mempersiapkan data yang akan di isi pada table master_siswa
      $column = [
        "nik" => $data['nik'],
        "nama_siswa" => $data['nama_siswa'],
        "jk" => $data['jk'],
        "jurusan" => $data['jurusan'],
        "alamat" => $data['alamat'],
        "passfoto" => "placeholder.jpg" //ambil nama file dari gambar yang sudah di upload
      ];
      // kirim data kolom ke insertData pada MasterSiswaModel
      $this->MasterSiswaModel->insertData($column);

      // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller MasterSiswa
      echo "
          <script>
              alert('Data siswa berhasil ditambahkan')
              window.location.href = '" . base_url('admin/MasterSiswa/index') . "';
          </script>
          ";
    }
  }
  public function hapus()
  {
      //segment = untuk mengambil nialai dari uri
      // contoh = admin/MasterBerita/hapus/123678
      // segments   1       2         3     4
      $nik = $this->uri->segment(4);
     $where =[
          "nik"=> $nik
     ];
     if(file_exists('./images/' . $nik . ".png")){
        unlink('./images/' . $nik .".png");
     }

     $this->MasterSiswaModel->hapusData($where);
     echo "
     <script>
          alert('Data siswa berhasil dihapus')
          window.location.href='",base_url('admin/MasterSiswa/index')."';
     </script>
       ";
  }
}
