<?php

class HalamanBlog extends CI_Controller
{
    public function index()
    {
        $halaman_blog['halaman_blog'] = $this->BlogModel->select_all_blog();
        $halaman_blog['active'] = "blog";
        $data['header'] = $this->load->view('front/partial/header',$halaman_blog,true);
        $data['page'] = $this->load->view('front/pages/halaman_blog',$halaman_blog,true);
        $data['title'] = "Data Blog";
        $data['contact'] =$this->ContactModel->select_row_contact();
        $this->load->view('front/partial/template',$data);
    }
    
}

?>