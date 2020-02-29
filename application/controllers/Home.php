<?php

class Home extends CI_Controller {

    public function index() {
        $this->load->helper('form');
        
        $data['todo_list'] = array('flag!!!Clean House', 'Call Mom', 'Run Errands');
        $data['title'] = "Language school";

        $this->load->view('header_view', $data);
        $this->load->view('home_view', $data);
        $this->load->view('footer_view', $data);
    }
}
