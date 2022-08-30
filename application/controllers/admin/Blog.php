<?php
class Blog extends CI_Controller
{
  public function index()
  {
    // memanggil semua data siswa
    $datablog['data'] = $this->BlogModel->select_all_blog();
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/blog/daftar', $datablog, true);
    // atur judul
    $data['title'] = "Blog";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_add()

  {
    // panggil file page daftar,kemudian kembalikan nilainya ke array page
    $data['page'] = $this->load->view('admin/pages/blog/form_add', null, true);
    // atur judul
    $data['title'] = "Form Tambah ";
    // kemudian tampilkan template beserta dengan datanya seperti : page.title   
    $this->load->view('admin/partial/template', $data);
  }

  public function form_edit()
  {
    $judul=$this->uri->segment(4);
    $where = [
        "judul"=> $judul
    ];
    $datablog['data_blog'] = $this->BlogModel->select_blog_by($where);
    $data['page'] = $this->load->view('admin/pages/blog/form_edit',$datablog,true);
    $data['title'] = "Form Edit";
    $this->load->view('admin/partial/template',$data);
    
  }
  public function edit_data()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();

    // beri nama file baru untuk file upload
    // contoh output 
    $nmFile = $data['judul'] . ".png";

    // setting config uploadnya
    $config = [
      "upload_path" => "./foto/blog", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambar hasil upload
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
        "id_blog"=>$data['id_blog'],
        "judul" => $data['judul'],
        "foto" => $imageData['file_name'],
        "tanggal" => $data['tanggal'],
        "isi" => $data['isi'],
        
      ];
      $where =[
        "id_blog" => $data['id_blog'],
        ];
      // kirim data kolom ke insertData pada MasterguruModel
      $insert = $this->BlogModel->editData($where,$column);

      echo $this->db->last_query();

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      // echo "
      //        <script>
      //            alert('Data blog berhasil diedit')
      //            window.location.href = '" . base_url('admin/Blog/index') . "';
      //        </script>
      //        ";
    } else {
      echo" 
      <script>
        console.log('".$this->upload->display_errors()."');
      </script>
    ";

      // mempersiapkan data yang akan di isi pada table master_Blog
      $column = [
        "id_blog"=>$data['id_blog'],
        "judul" => $data['judul'],
        "tanggal" => $data['tanggal'],
        "isi" => $data['isi']
        
      ];
      $where =[
        "id_blog" => $data['id_blog'],
        ];
      // kirim data kolom ke insertData pada MasterguruModel
      $insert = $this->BlogModel->editData($where,$column);


      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      // echo "
      //     <script>
      //         alert('Data blog berhasil diedit')
      //         window.location.href = '" . base_url('admin/Blog/index') . "';
      //     </script>
      //     ";
    }
  }

  public function add_new_data()
  {
    // menerima data formulir dari halaman form_add
    $data = $this->input->post();

    // beri nama file baru untuk file upload
    // contoh output 
    $nmFile = $data['judul'] . ".png";

    // setting config uploadnya
    $config = [
      "upload_path" => "./foto/blog", //menentukan lokasi path image yang akan kita gunakan untuk menyimpan gambar hasil upload
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
        "id_blog"=>null,
        "judul" => $data['judul'],
        "foto" => $imageData['file_name'],
        "tanggal" => $data['tanggal'],
        "isi" => $data['isi'],
      ];
      // kirim data kolom ke insertData pada MasterguruModel
     $this->BlogModel->insertData($column);

      // jika sudah, tampilkan pesan data guru berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
             <script>
                 alert('Data blog berhasil ditambahkan')
                 window.location.href = '" . base_url('admin/Blog/index') . "';
             </script>
             ";
    } else {
       echo "
       <script>
           alert('". $this->upload->display_errors() ."')
           window.location.href = '".base_url('admin/Blog/index')."';
       </script>
       ";
    

      // mempersiapkan data yang akan di isi pada table master_guru
      $column = [
        "id_blog"=>null,
        "judul" => $data['judul'],
        "tanggal" => $data['tanggal'],
        "isi" => $data['isi'],
        
       //ambil nama file dari gambar yang sudah di upload
      ];
      // kirim data kolom ke insertData pada MasterguruModel
      $this->BlogModel->insertData($column);

      // jika sudah, tampilkan pesan data blog berhasil ditambahkan
      // setelah itu pindah ke halaman utama pada controller Masterguru
      echo "
          <script>
              alert('Data blog berhasil ditambahkan')
              window.location.href = '" . base_url('admin/Blog/index') . "';
          </script>
          ";
    }
  }
  public function hapus()
  {
      //segment = untuk mengambil nialai dari uri
      // contoh = admin/MasterBerita/hapus/123678
      // segments   1       2         3     4
      $id_blog = $this->uri->segment(4);
     $where =[
          "id_blog"=> $id_blog
     ];
     if(file_exists('./foto/blog/' . $id_blog . ".png")){
        unlink('./foto/blog/' . $id_blog .".png");
     }

     $this->BlogModel->hapusData($where);
     echo "
     <script>
          alert('Data blog berhasil dihapus')
          window.location.href='",base_url('admin/Blog/index')."';
     </script>
       ";
  }
}
?>