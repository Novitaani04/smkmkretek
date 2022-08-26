<?php

class DataContact extends CI_Controller
{
    public function index()
    {
        $dataContact['contact'] = $this->ContactModel->select_all_contact();
        $data['page'] = $this->load->view('front/pages/contact',$dataContact,true);
        $data['title'] = "Data Contact";
        $this->load->view('front/partial/template',$data);
    }
}

?>