<?php

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function index() {
//        $this->load->model('news_model');
//
//        $data['title'] = "Language school";
//        $data['news'] = $this->news_model->get_last_ten_entries();
////        var_dump($data);
////        foreach ($data as $row) {
////            $users['name'] = $row->name;
////        }
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';
        var_dump($data);
        echo 'flag!!!';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/news', $data);
        $this->load->view('templates/footer', $data);
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('header_view', $data);
            $this->load->view('news/create');
            $this->load->view('footer_view');
        } else {
            $this->news_model->set_news();
            $this->load->view('news/success');
        }
    }

//    public function view($slug = NULL) {
//        $data['news_item'] = $this->news_model->get_news($slug);
//
//        if (empty($data['news_item'])) {
//            show_404();
//        }
//
//        $data['title'] = $data['news_item']['title'];
//
//        $this->load->view('templates/header', $data);
//        $this->load->view('news/view', $data);
//        $this->load->view('templates/footer');
//    }

}
