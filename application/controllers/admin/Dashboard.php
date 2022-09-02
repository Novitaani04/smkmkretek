<?php

    class Dashboard extends CI_Controller
    {
        public function index()
        {
            $data['page'] = $this->load->view('admin/pages/dashboard/dashboard', null, true);
            $data['title'] = "Dashboard";
            $this->load->view('admin/partial/template',$data); 
        }
    }

?>