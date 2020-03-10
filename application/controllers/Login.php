<?php

class Login extends CI_Controller {

    public function index() {
        $this->load->helper('url');
        $this->load->helper('security');
        $this->load->database();
        $this->load->library('form_validation');

        $data['title'] = "Form";

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pages/home');
            $this->load->view('templates/footer', $data);
        } else {
            $this->load->model('insert_model');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            echo $password;
            $data['user_info'] = $this->insert_model->get_user_info($email);
            if (password_verify($password, $data['user_info']['password'])) {
                echo'$email is logged in';
            }
//            print_r($data);
            $this->load->view('templates/header', $data);
            $this->load->view('pages/home');
            $this->load->view('templates/footer', $data);
        }
    }

}
