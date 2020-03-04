<?php

class Pages extends CI_Controller {

    public function view($page = 'home') {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        } 

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }
    public function sign_up($page = 'sign_up') {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        } 

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->helper('form');
        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }

}
