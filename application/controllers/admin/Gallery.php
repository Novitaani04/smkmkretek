<?php
class Gallery extends CI_Controller
{
  public function index()
  {
    // memanggil semua data siswa
    $dataGallery['data'] = $this->GalleryModel->select_all_gallery();
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/gallery/daftar', $dataGallery, true);
    // atur judul
    $data['title'] = "Master gallery";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_add()

  {
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/gallery/form_add', null, true);
    // atur judul
    $data['title'] = "Form Tambah ";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_edit()
  {
    $id_gallery=$this->uri->segment(4);
    $where = [
        "id_gallery"=> $id_gallery
    ];
    $dataGallery['data_gallery'] = $this->GalleryModel->select_gallery_by($where);
    $data['page'] = $this->load->view('admin/pages/gallery/form_edit',$dataGallery,true);
    $data['title'] = "Form Edit";
    $this->load->view('admin/partial/template',$data);
    
  }
  public function edit_data()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();

    // beri nama file baru untuk file upload
    // contoh output 
    $nmFile = rand(1111,9999) . ".png";

    // setting config uploadnya
    $config = [
      "upload_path" => "./foto/gallery", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambar hasil upload
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

      // mempersiapkan data yang akan di isi pada table master_gallery
      $column = [
        "id_gallery" => $data['id_gallery'],
        "judul" => $data['judul'],
        "foto" => $imageData['file_name'], //ambil judul file dari gambar yang sudah di upload
        "deskripsi" => $data['deskripsi'] 
    ];
      $where =[
        "id_gallery" => $data['id_gallery'],
        ];
      // kirim data kolom ke insertData pada MasterGalleryModel
      $this->GalleryModel->editData($where, $column);

      // jika sudah, tampilkan pesan data gallery berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Mastergallery
      echo "
             <script>
                 alert('Data gallery berhasil diedit')
                 window.location.href = '" . base_url('admin/gallery/index') . "';
             </script>
             ";
    } else {
     

      // mempersiapkan data yang akan di isi pada table master_gallery
      $column = [
        "id_gallery" => $data['id_gallery'],
        "judul" => $data['judul'], 
        "deskripsi" => $data['deskripsi'] 

      ];
      $where =[
        "id_gallery" => $data['id_gallery'],
        ];
      // kirim data kolom ke insertData pada MasterGalleryModel
      $this->GalleryModel->editData($where, $column);

      // jika sudah, tampilkan pesan data gallery berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Mastergallery
      echo "
          <script>
              alert('Data gallery berhasil diedit')
              window.location.href = '" . base_url('admin/gallery/index') . "';
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
    $nmFile = $data['id_gallery'] . ".png";

    // setting config uploadnya
    $config = [
      "upload_path" => "./foto/gallery", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambar hasil upload
      "allowed_types" => "jpg|jepg|png", //menentukan extension  file yang diizinkan
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

      // mempersiapkan data yang akan di isi pada table master_gallery
      $column = [
        "id_gallery" => $data['id_gallery'],
        "judul" => $data['judul'],
        "foto" => $imageData['file_name'], //ambil judul file dari gambar yang sudah di upload
        "deskripsi" => $data['deskripsi'] //ambil nama file dari gambar yang sudah di upload
      ];
      // kirim data kolom ke insertData pada MasterGalleryModel
      $insert = $this->GalleryModel->insertData($column);

      // jika sudah, tampilkan pesan data gallery berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Mastergallery
      echo "
             <script>
                 alert('Data gallery berhasil ditambahkan')
                 window.location.href = '" . base_url('admin/gallery/index') . "';
             </script>
             ";
    } else {
       echo "
       <script>
           alert('". $this->upload->display_errors() ."')
           window.location.href = '".base_url('admin/gallery/index')."';
       </script>
       ";
    

      // mempersiapkan data yang akan di isi pada table master_gallery
      $column = [
        "id_gallery" => $data['id_gallery'],
        "judul" => $data['judul'],
        "deskripsi" => $data['deskripsi'] 
        
       //ambil nama file dari gambar yang sudah di upload
      ];
      // kirim data kolom ke insertData pada MasterGalleryModel
      $insert = $this->GalleryModel->insertData($column);

      // jika sudah, tampilkan pesan data gallery berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Mastergallery
      echo "
          <script>
              alert('Data gallery berhasil ditambahkan')
              window.location.href = '" . base_url('admin/gallery/index') . "';
          </script>
          ";
    }
  }
  public function hapus()
  {
      //segment = untuk mengambil nialai dari uri
      // contoh = admin/MasterBerita/hapus/123678
      // segments   1       2         3     4
      $id_gallery = $this->uri->segment(4);
     $where =[
          "id_gallery"=> $id_gallery
     ];
     if(file_exists('./foto/gallery/' . $id_gallery . ".png")){
        unlink('./foto/gallery/' . $id_gallery .".png");
     }

     $this->GalleryModel->hapusData($where);
     echo "
     <script>
          alert('Data gallery berhasil dihapus')
          window.location.href='",base_url('admin/gallery/index')."';
     </script>
       ";
  }
}
?>