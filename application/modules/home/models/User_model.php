<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    private $table = 'users';

    public function get()
	{
		// $this->db->order_by('id', 'DESC');
		$result = $this->db->get($this->table);
		return $result;
    }

}