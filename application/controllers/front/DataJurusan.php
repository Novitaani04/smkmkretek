<?php

class DataJurusan extends CI_Controller
{
    public function index()
    {
        
        $id_jurusan = $this->uri->segment(4);
        $where =[
             "id_jurusan"=> $id_jurusan
        ];
        $data_jurusan['data_jurusan'] = $this->JurusanModel->select_jurusan_by($where);
        $data_jurusan['active'] = "jurusan";
        $data['header'] = $this->load->view('front/partial/header',$data_jurusan,true);
        $data['page'] = $this->load->view('front/pages/data_jurusan',$data_jurusan,true);
        $data['title'] = "Data Jurusan";
        $data['contact'] =$this->ContactModel->select_row_contact();
        $this->load->view('front/partial/template',$data);
    }
    
}

?>