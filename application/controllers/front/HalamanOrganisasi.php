<?php

class HalamanOrganisasi extends CI_Controller
{
    public function index()
    {
        $halaman_organisasi['halaman_organisasi'] = $this->OrganisasiModel->select_all_Organisasi();
        $halaman_organisasi['active'] = "organisasi";
        $data['header'] = $this->load->view('front/partial/header',$halaman_organisasi,true);
        $data['page'] = $this->load->view('front/pages/halaman_Organisasi',$halaman_organisasi,true);
        $data['title'] = "Data Organisasi";
        $data['contact'] =$this->ContactModel->select_row_contact();
        $this->load->view('front/partial/template',$data);
    }
    
}

?>