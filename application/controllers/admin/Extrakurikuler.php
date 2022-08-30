<?php
 
class Extrakurikuler extends CI_Controller
{
    
        public function index()
        {
          // memanggil semua data alumni
          $dataextra['data'] = $this->ExtraModel->select_all_extra();
          // panggil file page daftar,kemudian kembalikan nilainya ke array page
          $data['page'] = $this->load->view('admin/pages/extrakurikuler/daftar', $dataextra, true);
          // atur judul
          $data['title'] = "Extrakurikuler";
          // kemudian tampilkan template beserta dengan datanya seperti : page.title   
          $this->load->view('admin/partial/template', $data);
        }
        public function form_add()

        {
          // panggil file page daftar,kemudian kembalikan nilainya ke array page
          $data['page'] = $this->load->view('admin/pages/extrakurikuler/form_add', null, true);
          // atur judul
          $data['title'] = "Form Tambah extra";
          // kemudian tampilkan template beserta dengan datanya seperti : page.title   
          $this->load->view('admin/partial/template', $data);
        }
    
        public function form_edit()
      {
        $id_extra=$this->uri->segment(4);
        $where = [
            "id_extra"=> $id_extra
        ];
        $data['data_extra'] = $this->ExtraModel->select_extra_by($where);
        $data['page'] = $this->load->view('admin/pages/extrakurikuler/form_edit',$data,true);
        $data['title'] = "Form Edit";
        $this->load->view('admin/partial/template',$data);
      }
      public function edit_data()
      {   
        // menerima data formulir dari halaman form_add
          $data = $this->input->post();
    
          $nmFile = $data['id_extra'] . ".png";
    
          // setting config uploadnya
          $config = [
              "upload_path"=>"./foto/extra/", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambaha hasil upload
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
                  "id_extra" => $data['id_extra'],
                  "jenis_extra" => $data['jenis_extra'],
                  "foto" => $imageUpload['file_name'],
                  "deskripsi" => $data['deskripsi'],
              ];
    
              $where =[
                  "id_extra" => $data['id_extra'],
                  ];
    
              // kirim data kolom ke insertData pada MasterSiswaModel
              $insert = $this->ExtraModel->editData($where,$column);
              
              // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
              // setelah itu pindah ke halaman utama pada controller MasterSiswa
              echo "
              <script>
                  alert('Data extra berhasil diubahkan')
                  window.location.href = '".base_url('admin/Extrakurikuler/index')."';
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
                "id_extra" => $data['id_extra'],
                "jenis_extra" => $data['jenis_extra'],
                "deskripsi" => $data['deskripsi'],

            ];
  
    
              $where =[
                  "id_extra" => $data['id_extra'],
                  ];
    
              // kirim data kolom ke insertData pada MasterSiswaModel
            $this->ExtraModel->editData($where,$column);
              
              // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
              // setelah itu pindah ke halaman utama pada controller MasterSiswa
              echo "
              <script>
                  alert('Data extra berhasil diubahkan')
                  window.location.href = '".base_url('admin/Extrakurikuler/index')."';
              </script>
              ";
          }
      }
      public function add_new_data()
      {   
        // menerima data formulir dari halaman form_add
          $data = $this->input->post();
    
          $nmFile = $data['id_extra'] . ".png";
    
          // setting config uploadnya
          $config = [
              "upload_path"=>"./foto/extra/", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambaha hasil upload
              "allowed_types" => "jpg|jepg|png",//menentukan extension  file yang diizinkan
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
                "id_extra" => $data['id_extra'],
                "jenis_extra" => $data['jenis_extra'],
                "foto" => $imageUpload['file_name'],
                "deskripsi" => $data['deskripsi']
            ];
    
              // kirim data kolom ke insertData pada MasterSiswaModel
             $this->ExtraModel->insertData($column);
              
              // jika sudah, tampilkan pesan data siswa berhasil ditambahkan
              // setelah itu pindah ke halaman utama pada controller MasterSiswa
              echo "
              <script>
                  alert('Data extra berhasil ditambahkan')
                  window.location.href = '".base_url('admin/Extrakurikuler/index')."';
              </script>
              ";
          }else {
          
            $column = [
                "id_extra" => $data['id_extra'],
                "jenis_extra" => $data['jenis_extra'],
                "deskripsi" => $data['deskripsi'],
              ];
    
              // kirim data kolom ke insertData pada MasterSiswaModel
              $insert = $this->ExtraModel->insertData($column);
              
              // jika sudah, tampilkan pesan data extra berhasil ditambahkan
              // setelah itu pindah ke halaman utama pada controller MasterSiswa
              echo "
              <script>
                  alert('Data extra berhasil ditambahkan')
                  window.location.href = '".base_url('admin/Extrakurikuler/index')."';
              </script>
              ";
          }
      }
      public function hapus()
      {
          //segment = untuk mengambil nialai dari uri
          // contoh = admin/MasterBerita/hapus/123678
          // segments   1       2         3     4
          $id_extra = $this->uri->segment(4);
         $where =[
              "id_extra"=> $id_extra
         ];
         if(file_exists('./foto/extra/' . $id_extra . ".png")){
            unlink('./foto/extra/' . $id_extra .".png");
         }
    
         $this->ExtraModel->hapusData($where);
         echo "
         <script>
              alert('Data extra berhasil dihapus')
              window.location.href='",base_url('admin/Extrakurikuler/index')."';
         </script>
           ";
      }
}

?>