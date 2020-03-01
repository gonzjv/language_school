<?php

class News_model extends CI_Model {

    public $name;
    public $surname;
    public $query;

        public function get_last_ten_entries()
        {
                $query = $this->db->get('user');
                return $query->result_array();
        }
   
}

?>