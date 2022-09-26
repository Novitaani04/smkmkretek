<?php

class VisidanMisi extends CI_Controller
{
    public function index()
    {
        $dataAbout['data_about'] = $this->AboutModel->select_all_about();
        $dataAbout['active'] = "about";
        $data['header'] = $this->load->view('front/partial/header',$dataAbout,true);
        $data['page'] = $this->load->view('front/pages/data_about',$dataAbout,true);
        $data['title'] = "Data About";
        $data['contact'] =$this->ContactModel->select_row_contact();
        $this->load->view('front/partial/template',$data);
    }
}

?>