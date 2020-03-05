<?php

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
    }

    public function view($page = 'home') {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function form($page = 'sign_up') {
        echo 'hey ho!!!';
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');

        $data['title'] = "Form";

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('surname', 'Surname', 'required');
//        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.')
//        );
//        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
//        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules(
                'email', 'Email', 'required|min_length[5]|max_length[12]|is_unique[user.email]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
                )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pages/' . $page, $data);
            $this->load->view('templates/footer', $data);
        } else {
            if (isset($_POST['name'])) {
                $this->load->model('insert_model');
                $this->insert_model->insert_entry();
            }
            $this->load->view('templates/header', $data);
            $this->load->view('pages/success', $data);
            $this->load->view('templates/footer', $data);
        }
    }

}
