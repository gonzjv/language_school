<?php

class Sign_up extends CI_Controller {

    public function index() {
        $this->load->helper('form');
        $this->load->database();
        $this->load->helper('url');
        if (isset($_POST['first_name'])) {
            $this->load->model('insert_model');
            $this->insert_model->insert_entry();
        }
        $data['title'] = "Sign up";


//            redirect('home');

        $this->load->view('header_view', $data);
        $this->load->view('sign_up_view', $data);
        $this->load->view('footer_view', $data);
    }

}
