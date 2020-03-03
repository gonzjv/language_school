<?php

class Form extends CI_Controller {

    public function index() {
        $this->load->helper('form');
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
            $this->load->view('header_view', $data);
            $this->load->view('sign_up_view');
            $this->load->view('footer_view', $data);
        } else {
            if (isset($_POST['name'])) {
                $this->load->model('insert_model');
                $this->insert_model->insert_entry();
            }
            $this->load->view('header_view', $data);
            $this->load->view('success_view');
            $this->load->view('footer_view', $data);
        }
    }

}
