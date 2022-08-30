<?php
 
class Organisasi extends CI_Controller
{
    
        public function index()
        {
          // memanggil semua data alumni
          $dataorganisasi['data'] = $this->OrganisasiModel->select_all_organisasi();
          // panggil file page daftar,kemudian kembalikan nilainya ke array page
          $data['page'] = $this->load->view('admin/pages/organisasi/daftar', $dataorganisasi, true);
          // atur judul
          $data['title'] = "Organisasi";
          // kemudian tampilkan template beserta dengan datanya seperti : page.title   
          $this->load->view('admin/partial/template', $data);
        }
        public function form_add()

        {
          // panggil file page daftar,kemudian kembalikan nilainya ke array page
          $data['page'] = $this->load->view('admin/pages/organisasi/form_add', null, true);
          // atur judul
          $data['title'] = "Form Tambah Organisasi";
          // kemudian tampilkan template beserta dengan datanya seperti : page.title   
          $this->load->view('admin/partial/template', $data);
        }
    
        public function form_edit()
      {
        $id_organisasi=$this->uri->segment(4);
        $where = [
            "id_organisasi"=> $id_organisasi
        ];
        $data['data_organisasi'] = $this->OrganisasiModel->select_organisasi_by($where);
        $data['page'] = $this->load->view('admin/pages/organisasi/form_edit',$data,true);
        $data['title'] = "Form Edit";
        $this->load->view('admin/partial/template',$data);
      }
      public function edit_data()
      {   
        // menerima data formulir dari halaman form_add
          $data = $this->input->post();
    
          $nmFile = $data['id_organisasi'] . ".png";
    
          // setting config uploadnya
          $config = [
              "upload_path"=>"./foto/organisasi/", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambaha hasil upload
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
                  "id_organisasi" => $data['id_organisasi'],
                  "nama" => $data['nama'],
                  "foto" => $imageUpload['file_name'],

              ];
    
              $where =[
                  "id_organisasi" => $data['id_organisasi'],
                  ];
    
              // kirim data kolom ke insertData pada MasterSiswaModel
              $this->OrganisasiModel->editData($where,$column);
              
              // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
              // setelah itu pindah ke halaman utama pada controller MasterSiswa
              echo "
              <script>
                  alert('Data organisasi berhasil diubahkan')
                  window.location.href = '".base_url('admin/Organisasi/index')."';
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
                "id_organisasi" => $data['id_organisasi'],
                "nama" => $data['nama'],

            ];
  
    
              $where =[
                  "id_organisasi" => $data['id_organisasi'],
                  ];
    
              // kirim data kolom ke insertData pada MasterSiswaModel
              $this->OrganisasiModel->editData($where,$column);
              
              // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
              // setelah itu pindah ke halaman utama pada controller MasterSiswa
              echo "
              <script>
                  alert('Data organisasi berhasil diubahkan')
                  window.location.href = '".base_url('admin/Organisasi/index')."';
              </script>
              ";
          }
      }
      public function add_new_data()
      {   
        // menerima data formulir dari halaman form_add
          $data = $this->input->post();
    
          $nmFile = $data['id_organisasi'] . ".png";
    
          // setting config uploadnya
          $config = [
              "upload_path"=>"./foto/organisasi/", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambaha hasil upload
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
                "id_organisasi" => $data['id_organisasi'],
                "nama" => $data['nama'],
                "foto" => $imageUpload['file_name']
            ];
    
              // kirim data kolom ke insertData pada MasterSiswaModel
              $this->OrganisasiModel->insertData($column);
              
              // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
              // setelah itu pindah ke halaman utama pada controller MasterSiswa
              echo "
              <script>
                  alert('Data organisasi berhasil ditambahkan')
                  window.location.href = '".base_url('admin/Organisasi/index')."';
              </script>
              ";
          }else {
          
            $column = [
                "id_organisasi" => $data['id_organisasi'],
                "nama" => $data['nama'],
              ];
    
              // kirim data kolom ke insertData pada MasterSiswaModel
              $this->OrganisasiModel->insertData($column);
              
              // jika sudah, tampilkan pesan data organisasi berhasil ditambahkan
              // setelah itu pindah ke halaman utama pada controller MasterSiswa
              echo "
              <script>
                  alert('Data organisasi berhasil ditambahkan')
                  window.location.href = '".base_url('admin/Organisasi/index')."';
              </script>
              ";
          }
      }
      public function hapus()
      {
          //segment = untuk mengambil nialai dari uri
          // contoh = admin/MasterBerita/hapus/123678
          // segments   1       2         3     4
          $id_organisasi = $this->uri->segment(4);
         $where =[
              "id_organisasi"=> $id_organisasi
         ];
         if(file_exists('./foto/organisasi/' . $id_organisasi . ".png")){
            unlink('./foto/organisasi/' . $id_organisasi .".png");
         }
    
         $this->OrganisasiModel->hapusData($where);
         echo "
         <script>
              alert('Data organisasi berhasil dihapus')
              window.location.href='",base_url('admin/Organisasi/index')."';
         </script>
           ";
      }
}

?>