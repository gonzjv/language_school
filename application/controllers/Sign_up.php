<?php

class Sign_up extends CI_Controller {

    public function index() {
        $this->load->helper('form');
        $this->load->database();
        $this->load->helper('url');
        if (isset ($_POST['first_name'])) {
        $this->load->model('insert_model');
        $this->insert_model->insert_entry();
        }
        $data['title'] = "Language school";


//        $first_name = $this->input->post('first_name');
//        $last_name = $this->input->post('last_name');
//        if (isset($first_name) and isset($last_name)) {
//            $data_input = array(
//                'first_name' => $first_name,
//                'last_name' => $last_name
//            );
//
//            $this->db->insert('user', $data_input);
//            redirect('home');
//        }


        $this->load->view('sign_up_view', $data);
    }

}
