<?php

class News extends CI_Controller {

    public function index() {
        $data['todo_list'] = array('flag!!!Clean House', 'Call Mom', 'Run Errands');
        $data['title'] = "Language school";
        $data['heading'] = "My Real Heading";
        $this->load->view('news_view', $data);
    }

}
