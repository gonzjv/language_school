<?php

class News extends CI_Controller {

    public function index() {
        $this->load->database();
        $this->load->model('news_model');
        
//        $data['title'] = "Language school";
        $data = $this->news_model->get_last_ten_entries();
       foreach ($data as $row)
{
        echo $row['name'];
        echo $row['surname'];
}
        $this->load->view('header_view', $data);
        $this->load->view('news_view', $data);
        $this->load->view('footer_view', $data);
    }

}
