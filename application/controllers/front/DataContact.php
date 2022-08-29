<?php

class DataContact extends CI_Controller
{
    public function index()
    {
        $dataContact['contact'] = $this->ContactModel->select_all_contact();
        $dataContact['active'] ="contact";
        $data['header'] = $this->load->view('front/partial/header',$dataContact,true);
        $data['page'] = $this->load->view('front/pages/contact',$dataContact,true);
        $data['title'] = "Data Contact";
        $data['contact'] =$this->ContactModel->select_row_contact();
        $this->load->view('front/partial/template',$data);
    }
}

?>