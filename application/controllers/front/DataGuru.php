<?php

class DataGuru extends CI_Controller
{
    public function index()
    {
        $dataGuru['data_guru'] = $this->GuruModel->select_all_guru();
        $data['page'] = $this->load->view('front/pages/data_guru',$dataGuru,true);
        $data['title'] = "Data Guru";
        $this->load->view('front/partial/template',$data);
    }
}

?>