<?php

class DataAlumni extends CI_Controller
{
    public function index()
    {
        $dataAlumni['data_alumni'] = $this->MasterAlumniModel->select_all_Alumni();
        $dataAlumni['active'] = "alumni";
        $data['header'] = $this->load->view('front/partial/header',$dataAlumni,true);
        $data['page'] = $this->load->view('front/pages/data_alumni',$dataAlumni,true);
        $data['title'] = "Data Alumni";
        $data['contact'] =$this->ContactModel->select_row_contact();
        $this->load->view('front/partial/template',$data);
    }
}

?>