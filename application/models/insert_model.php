<?php

class Insert_model extends CI_Model {

    public $name;
    public $surname;

//        public function get_last_ten_entries()
//        {
//                $query = $this->db->get('entries', 10);
//                return $query->result();
//        }
    public function insert_entry() {
        $data_input = array(
            'name' => $this->input->post('name'),
            'surname' => $this->input->post('surname'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        );
        $this->db->insert('user', $data_input);
    }

//        public function update_entry()
//        {
//                $this->title    = $_POST['title'];
//                $this->content  = $_POST['content'];
//                $this->date     = time();
//
//                $this->db->update('entries', $this, array('id' => $_POST['id']));
//        }
}

?>