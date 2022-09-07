<?php
    class MasterAlumni extends CI_Controller
    {
      public function index()
      {
        // memanggil semua data alumni
        $dataAlumni['data'] = $this->MasterAlumniModel->select_all_alumni();
        // panggil file page daftar,kemudian kembalikan nilainya ke array page
        $data['page'] = $this->load->view('admin/pages/master_alumni/daftar', $dataAlumni, true);
        // atur judul
        $data['title'] = "Master Alumni";
        // kemudian tampilkan template beserta dengan datanya seperti : page.title   
        $this->load->view('admin/partial/template', $data);
      }
  
    public function form_add()

    {
      // panggil file page daftar,kemudian kembalikan nilainya ke array page
      $data['page'] = $this->load->view('admin/pages/master_alumni/form_add', null, true);
      // atur judul
      $data['title'] = "Form Tambah Alumni";
      // kemudian tampilkan template beserta dengan datanya seperti : page.title   
      $this->load->view('admin/partial/template', $data);
    }

    public function form_edit()
  {
    $nama=$this->uri->segment(4);
    $where = [
        "nama"=> $nama
    ];
    $dataAlumni['data_alumni'] = $this->MasterAlumniModel->select_alumni_by($where);
    $data['page'] = $this->load->view('admin/pages/master_alumni/form_edit',$dataAlumni,true);
    $data['title'] = "Form Edit";
    $this->load->view('admin/partial/template',$data);
  }
  public function edit_data()
  {   
    // menerima data formulir dari halaman form_add
      $data = $this->input->post();

      $nmFile = $data['nama'] . ".png";

      // setting config uploadnya
      $config = [
          "upload_path"=>"./foto/alumni/", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambaha hasil upload
          "allowed_types" => "jpg|jpeg|png",//menentukan extension  file yang diizinkan
          "overwrite" => TRUE,//jika pada file folder terdapat nama yang sama ,maka timpa file lama dengan file baru 
          "file_name" => $nmFile //memberi nama file sesuai dengan nama file yg sudah tertera di variabel
      ];

      // initialize config upload
      $this->upload->initialize($config);
      // melakukan proses upoad
      $resultUpload = $this->upload->do_upload('foto');
      // jika hasil upload gambar itu berhasil,maka lanjutkan proses ke input data ke database
      if($resultUpload == true){
          $imageUpload = $this->upload->data();
          // mempersiapkan data yang akan di isi pada table master_Alumni
          $column = [
              "nama" => $data['nama'],
              "foto" => $imageUpload['file_name'],
              "jk" => $data['jk'],
              "angkatan" => $data['angkatan'],
              "tahun_lulus" => $data['tahun_lulus'],
              "pekerjaan_sekarang" => $data['pekerjaan_sekarang'],
          
          ];

          $where =[
              "nama" => $data['nama'],
              ];

          // kirim data kolom ke insertData pada MasterSiswaModel
          $this->MasterAlumniModel->editData($where,$column);
          
          // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
          // setelah itu pindah ke halaman utama pada controller MasterSiswa
          echo "
          <script>
              alert('Data alumni berhasil diubahkan')
              window.location.href = '".base_url('admin/MasterAlumni/index')."';
          </script>
          ";
      }else {
        echo" 
          <script>
            console.log('".$this->upload->display_errors()."');
          </script>
        ";


        // $imageUpload = $this->upload->data();
          $column = [
            "nama" => $data['nama'],
            "jk" => $data['jk'],
            "angkatan" => $data['angkatan'],
            "tahun_lulus" => $data['tahun_lulus'],
            "pekerjaan_sekarang" => $data['pekerjaan_sekarang']
          ];

          $where =[
              "nama" => $data['nama'],
              ];

          // kirim data kolom ke insertData pada MasterSiswaModel
         $this->MasterAlumniModel->editData($where,$column);
          
          // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
          // setelah itu pindah ke halaman utama pada controller MasterSiswa
          echo "
          <script>
              alert('Data alumni berhasil diubahkan')
              window.location.href = '".base_url('admin/MasterAlumni/index')."';
          </script>
          ";
      }
  }
  public function add_new_data()
  {   
    // menerima data formulir dari halaman form_add
      $data = $this->input->post();

      $nmFile = $data['nama'] . ".png";

      // setting config uploadnya
      $config = [
          "upload_path"=>"./foto/alumni/", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambaha hasil upload
          "allowed_types" => "jpg|jpeg|png",//menentukan extension  file yang diizinkan
          "overwrite" => TRUE,//jika pada file folder terdapat nama yang sama ,maka timpa file lama dengan file baru 
          "file_name" => $nmFile //memberi nama file sesuai dengan nama file yg sudah tertera di variabel
      ];

      // initialize config upload
      $this->upload->initialize($config);
      // melakukan proses upoad
      $resultUpload = $this->upload->do_upload('foto');
      // jika hasil upload gambar itu berhasil,maka lanjutkan proses ke input data ke database
      if($resultUpload == true){
          $imageUpload = $this->upload->data();
          // mempersiapkan data yang akan di isi pada table master_siswa
          $column = [
              "nama" => $data['nama'],
              "foto" => $imageUpload['file_name'],
              "jk" => $data['jk'],
              "angkatan" => $data['angkatan'],
              "tahun_lulus" => $data['tahun_lulus'],
              "pekerjaan_sekarang" => $data['pekerjaan_sekarang']
          
          ];

          // kirim data kolom ke insertData pada MasterSiswaModel
          $this->MasterAlumniModel->insertData($column);
          
          // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
          // setelah itu pindah ke halaman utama pada controller MasterSiswa
          echo "
          <script>
              alert('Data alumni berhasil ditambahkan')
              window.location.href = '".base_url('admin/MasterAlumni/index')."';
          </script>
          ";
      }else {

          $column = [
            "nama" => $data['nama'],
            "jk" => $data['jk'],
            "angkatan" => $data['angkatan'],
            "tahun_lulus" => $data['tahun_lulus'],
            "pekerjaan_sekarang" => $data['pekerjaan_sekarang']
          ];

          // kirim data kolom ke insertData pada MasterSiswaModel
           $this->MasterAlumniModel->insertData($column);
          
          // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
          // setelah itu pindah ke halaman utama pada controller MasterSiswa
          echo "
          <script>
              alert('Data alumni berhasil ditambahkan')
              window.location.href = '".base_url('admin/MasterAlumni/index')."';
          </script>
          ";
      }
  }
  public function hapus()
  {
      //segment = untuk mengambil nialai dari uri
      // contoh = admin/MasterBerita/hapus/123678
      // segments   1       2         3     4
      $nama = $this->uri->segment(4);
     $where =[
          "nama"=> $nama
     ];
     if(file_exists('./foto/' . $nama . ".png")){
        unlink('./foto/' . $nama .".png");
     }

     $this->MasterAlumniModel->hapusData($where);
     echo "
     <script>
          alert('Data alumni berhasil dihapus')
          window.location.href='",base_url('admin/MasterAlumni/index')."';
     </script>
       ";
  }
 }
?>