<?php
 
class Jurusan extends CI_Controller
{
    
        public function index()
        {
          // memanggil semua data alumni
          $dataJurusan['data'] = $this->JurusanModel->select_all_jurusan();
          // panggil file page daftar,kemudian kembalikan nilainya ke array page
          $data['page'] = $this->load->view('admin/pages/jurusan/daftar', $dataJurusan, true);
          // atur judul
          $data['title'] = "Jurusan";
          // kemudian tampilkan template beserta dengan datanya seperti : page.title   
          $this->load->view('admin/partial/template', $data);
        }
        public function form_add()

        {
          // panggil file page daftar,kemudian kembalikan nilainya ke array page
          $data['page'] = $this->load->view('admin/pages/jurusan/form_add', null, true);
          // atur judul
          $data['title'] = "Form Tambah Jurusan";
          // kemudian tampilkan template beserta dengan datanya seperti : page.title   
          $this->load->view('admin/partial/template', $data);
        }
    
        public function form_edit()
      {
        $id_jurusan=$this->uri->segment(4);
        $where = [
            "id_jurusan"=> $id_jurusan
        ];
        $datajurusan['data_jurusan'] = $this->JurusanModel->select_jurusan_by($where);
        $data['page'] = $this->load->view('admin/pages/jurusan/form_edit',$datajurusan,true);
        $data['title'] = "Form Edit";
        $this->load->view('admin/partial/template',$data);
      }
      public function edit_data()
      {   
        // menerima data formulir dari halaman form_add
          $data = $this->input->post();
    
          $nmFile = $data['id_jurusan'] . ".png";
    
          // setting config uploadnya
          $config = [
              "upload_path"=>"./foto/jurusan/", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambaha hasil upload
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
                  "id_jurusan" => $data['id_jurusan'],
                  "nama_jurusan" => $data['nama_jurusan'],
                  "foto" => $imageUpload['file_name'],
                  "deskripsi" => $data['deskripsi'],
              ];
    
              $where =[
                  "id_jurusan" => $data['id_jurusan'],
                  ];
    
              // kirim data kolom ke insertData pada MasterSiswaModel
            $this->JurusanModel->editData($where, $column);
              
              // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
              // setelah itu pindah ke halaman utama pada controller MasterSiswa
              echo "
              <script>
                  alert('Data jurusan berhasil diubahkan')
                  window.location.href = '".base_url('admin/Jurusan/index')."';
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
                "id_jurusan" => $data['id_jurusan'],
                "nama_jurusan" => $data['nama_jurusan'],
                "deskripsi" => $data['deskripsi'],

            ];
              $where =[
                  "id_jurusan" => $data['id_jurusan'],
                  
                  ];
    
              // kirim data kolom ke insertData pada MasterSiswaModel
              $this->JurusanModel->editData($where,$column);
              
              // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
              // setelah itu pindah ke halaman utama pada controller MasterSiswa
              echo "
              <script>
                  alert('Data jurusan berhasil diubahkan')
                  window.location.href = '".base_url('admin/Jurusan/index')."';
              </script>
              ";
          }
      }
      public function add_new_data()
      {   
        // menerima data formulir dari halaman form_add
          $data = $this->input->post();
    
          $nmFile = $data['id_jurusan'] . ".png";
    
          // setting config uploadnya
          $config = [
              "upload_path"=>"./foto/jurusan/", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambaha hasil upload
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
                "id_jurusan" => $data['id_jurusan'],
                "nama_jurusan" => $data['nama_jurusan'],
                "foto" => $imageUpload['file_name'],
                "deskripsi" => $data['deskripsi'],
            ];
    
              // kirim data kolom ke insertData pada MasterSiswaModel
              $this->JurusanModel->insertData($column);
              
              // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
              // setelah itu pindah ke halaman utama pada controller MasterSiswa
              echo "
              <script>
                  alert('Data jurusan berhasil ditambahkan')
                  window.location.href = '".base_url('admin/Jurusan/index')."';
              </script>
              ";
          }else {
          
            $column = [
                "id_jurusan" => $data['id_jurusan'],
                "nama_jurusan" => $data['nama_jurusan'],
                "deskripsi" => $data['deskripsi'],
              ];
    
              // kirim data kolom ke insertData pada MasterSiswaModel
             $this->JurusanModel->insertData($column);
              
              // jika sudah, tampilkan pesan data jurusan berhasil ditambahkan
              // setelah itu pindah ke halaman utama pada controller MasterSiswa
              echo "
              <script>
                  alert('Data jurusan berhasil ditambahkan')
                  window.location.href = '".base_url('admin/Jurusan/index')."';
              </script>
              ";
          }
      }
      public function hapus()
      {
          //segment = untuk mengambil nialai dari uri
          // contoh = admin/MasterBerita/hapus/123678
          // segments   1       2         3     4
          $id_jurusan = $this->uri->segment(4);
         $where =[
              "id_jurusan"=> $id_jurusan
         ];
         if(file_exists('./foto/jurusan/' . $id_jurusan . ".png")){
            unlink('./foto/jurusan/' . $id_jurusan .".png");
         }
    
         $this->JurusanModel->hapusData($where);
         echo "
         <script>
              alert('Data jurusan berhasil dihapus')
              window.location.href='",base_url('admin/Jurusan/index')."';
         </script>
           ";
      }
}

?>