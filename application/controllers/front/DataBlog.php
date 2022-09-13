<?php

class DataBlog extends CI_Controller
{
    public function index()
    {
        $id_blog = $this->uri->segment(4);
        $where =[
             "id_blog"=> $id_blog
        ];
        $data_blog['data_blog'] = $this->BlogModel->select_blog_by($where);
        $data_blog['active'] = "blog";
        $data['header'] = $this->load->view('front/partial/header',$data_blog,true);
        $data['page'] = $this->load->view('front/pages/data_blog',$data_blog,true);
        $data['title'] = "Data Blog";
        $data['contact'] =$this->ContactModel->select_row_contact();
        $this->load->view('front/partial/template',$data);
    }
    
}

?>