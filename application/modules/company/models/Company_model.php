<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends CI_Model {

    private $table = 'companies';

    public function get()
	{
		// $this->db->order_by('id', 'DESC');
		$result = $this->db->get($this->table);
		return $result;
    }

    public function get_where($where)
	{
		// $this->db->order_by('id', 'DESC');
		$result = $this->db->get_where($this->table, $where);
		return $result;
    }

    // Create company
    public function create($data)
	{
        $this->db->insert($this->table, $data);
        // Return id
		return $this->db->insert_id();
    }
    
    public function destroy($where)
    {
        $this->db->where($where);
        $this->db->delete($this->table);

        if ($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }

    public function update($where, $data)
    {
        $this->db->trans_start();
        $this->db->where($where);
        $this->db->update($this->table, $data);
        $this->db->trans_complete();

        if ($this->db->trans_status()){
            return true;
        }else{
            return false;
        }
    }

}