<?php
      
    class Home extends CI_Controller
    {
        public function index()
        {
            $dataHome['data_jurusan'] = $this->JurusanModel->select_all_jurusan();
            $dataHome['data_blog'] = $this->BlogModel->select_all_blog();
            $dataHome['data_extra'] = $this->ExtraModel->select_all_extra();
            $dataHome['data_organisasi'] = $this->OrganisasiModel->select_all_organisasi();
            $dataHome['data_carousell'] = $this->CarousellModel->select_all_carousell();
            $dataHome['data_about'] = $this->AboutModel->select_all_about();
            $data['page'] = $this->load->view('front/pages/home',$dataHome,true);
            $data['title'] = "Home";
            $this->load->view('front/partial/template',$data);
        }
    }
?>