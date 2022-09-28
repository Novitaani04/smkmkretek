<?php

class HalamanJurusan extends CI_Controller
{
    public function index()
    {
        $halaman_jurusan['halaman_jurusan'] = $this->JurusanModel->select_all_jurusan();
        $halaman_jurusan['active'] = "jurusan";
        $data['header'] = $this->load->view('front/partial/header',$halaman_jurusan,true);
        $data['page'] = $this->load->view('front/pages/halaman_jurusan',$halaman_jurusan,true);
        $data['title'] = "Data Jurusan";
        $data['contact'] =$this->ContactModel->select_row_contact();
        $this->load->view('front/partial/template',$data);
    }
    
}

?>