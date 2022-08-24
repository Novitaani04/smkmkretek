<?php

class DataBlog extends CI_Controller
{
    public function index()
    {
        $data_blog['data_blog'] = $this->BlogModel->select_all_blog();
        $data['page'] = $this->load->view('front/pages/data_blog',$data_blog,true);
        $data['title'] = "Data Blog";
        $this->load->view('front/partial/template',$data);
    }
}

?>