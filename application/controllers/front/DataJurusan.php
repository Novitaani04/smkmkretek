<?php

class DataJurusan extends CI_Controller
{
    public function index()
    {
        $dataJurusan['data_jurusan'] = $this->JurusanModel->select_all_jurusan();
        $dataJurusan['active'] = "jurusan";
        $data['header'] = $this->load->view('front/partial/header',$dataJurusan,true);
        $data['page'] = $this->load->view('front/pages/data_jurusan',$dataJurusan,true);
        $data['title'] = "Data Jurusan";
        $data['contact'] =$this->ContactModel->select_row_contact();
        $this->load->view('front/partial/template',$data);
    }
}

?>