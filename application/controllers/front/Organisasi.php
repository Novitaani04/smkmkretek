<?php

class Organisasi extends CI_Controller
{
    public function index()
    {
        $id_organisasi = $this->uri->segment(4);
        $where =[
             "id_organisasi"=> $id_organisasi
        ];
        $data_Organisasi['data_organisasi'] = $this->OrganisasiModel->select_organisasi_by($where);
        $data_Organisasi['active'] = "organisasi";
        $data['header'] = $this->load->view('front/partial/header',$data_Organisasi,true);
        $data['page'] = $this->load->view('front/pages/data_organisasi',$data_Organisasi,true);
        $data['title'] = "Data Organisasi";
        $data['contact'] =$this->ContactModel->select_row_contact();
        $this->load->view('front/partial/template',$data);
    }
    
}

?>