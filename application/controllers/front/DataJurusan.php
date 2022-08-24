<?php

class DataJurusan extends CI_Controller
{
    public function index()
    {
        $dataJurusan['data_jurusan'] = $this->JurusanModel->select_all_jurusan();
        $data['page'] = $this->load->view('front/pages/data_jurusan',$dataJurusan,true);
        $data['title'] = "Data Jurusan";
        $this->load->view('front/partial/template',$data);
    }
}

?>