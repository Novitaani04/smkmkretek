<?php

class Gallery extends CI_Controller
{
    public function index()
    {
        $gallery['data_gallery'] = $this->GalleryModel->select_all_gallery();
        $dataGallery['active'] = "Gallery";
        $data['header'] = $this->load->view('front/partial/header',$dataGallery,true);
        $data['page'] = $this->load->view('front/pages/gallery',$gallery,true);
        $data['title'] = "Data Gallery";
        $data['contact'] =$this->ContactModel->select_row_contact();
        $this->load->view('front/partial/template',$data);
    }
}

?>