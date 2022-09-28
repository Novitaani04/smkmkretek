<?php

class HalamanExtra extends CI_Controller
{
    public function index()
    {
        $halaman_extra['halaman_extra'] = $this->ExtraModel->select_all_extra();
        $halaman_extra['active'] = "extra";
        $data['header'] = $this->load->view('front/partial/header',$halaman_extra,true);
        $data['page'] = $this->load->view('front/pages/halaman_extra',$halaman_extra,true);
        $data['title'] = "Data Extra";
        $data['contact'] =$this->ContactModel->select_row_contact();
        $this->load->view('front/partial/template',$data);
    }
    
}

?>