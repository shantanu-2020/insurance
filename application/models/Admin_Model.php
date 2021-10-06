<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model{
      //staff model function
	public function insertEmployee($data)
  	{
            return $this->db->insert('staff',$data);
  	}

  	 public function getEmployee()
    {
    	$query = $this->db->get('staff');
    	return $query->result();
    }
      //agent model function
    public function insertAgent($data)
  	{
            return $this->db->insert('agent',$data);
  	}

  	 public function getAgent()
    {
    	$query = $this->db->get('agent');
    	return $query->result();
    }
     // type model function
     public function insertType($data)
  	{
            return $this->db->insert('type',$data);
  	}

  	 public function getType()
    {
    	$query = $this->db->get('type');
    	return $query->result();
    }

     public function insertPeriod($data)
  	{
            return $this->db->insert('period',$data);
  	}

  	 public function getPeriod()
    {
    	$query = $this->db->get('period');
    	return $query->result();
    }

      public function insertForm($data)
    {
            return $this->db->insert('details',$data);
    }

     public function getClass()
    {
      $query = $this->db->get('board');
      return $query->result();
    }


      public function insertClass($data)
    {
            return $this->db->insert('board',$data);
    }

   


      public function insertAddress($data)
    {
            return $this->db->insert('address',$data);
    }

     



}
?>