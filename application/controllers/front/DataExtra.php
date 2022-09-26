<?php

class DataExtra extends CI_Controller
{
    public function index()
    {
        $id_extra = $this->uri->segment(4);
        $where =[
             "id_extra"=> $id_extra
        ];
        $data_Extra['data_extra'] = $this->ExtraModel->select_extra_by($where);
        $data_Extra['active'] = "extra";
        $data['header'] = $this->load->view('front/partial/header',$data_Extra,true);
        $data['page'] = $this->load->view('front/pages/data_extra',$data_Extra,true);
        $data['title'] = "Data Extra";
        $data['contact'] =$this->ContactModel->select_row_contact();
        $this->load->view('front/partial/template',$data);
    }
    
}

?>