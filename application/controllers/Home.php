<?php

class Home extends CI_Controller {

    public function index() {
        $this->load->helper('form');
        $this->load->database();

        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        if (isset ($first_name) and isset ($last_name)) {
        $data = array(
            'first_name' => $first_name,
            'last_name' => $last_name
        );

        $this->db->insert('user', $data);
        }

        echo $first_name;
        echo $last_name;

        $data['todo_list'] = array('flag!!!Clean House', 'Call Mom', 'Run Errands');
        $data['title'] = "Language school";
        $data['heading'] = "My Real Heading";

        $this->load->view('home_view', $data);
    }

    public function comments() {
        echo 'Look at this!';
    }

}
