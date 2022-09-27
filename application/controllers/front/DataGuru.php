<?php

class DataGuru extends CI_Controller
{
    public function index()
    {
        $dataGuru['data_guru'] = $this->GuruModel->select_all_guru();
        $dataGuru['active'] = "data_guru";
        $data['header'] = $this->load->view('front/partial/header',$dataGuru,true);
        $data['page'] = $this->load->view('front/pages/data_guru',$dataGuru,true);
        $data['title'] = "Data Guru";
        $data['contact'] =$this->ContactModel->select_row_contact();
        $this->load->view('front/partial/template',$data);
    }
}

?>