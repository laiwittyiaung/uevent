<?php 
class User_model extends CI_Model
{
    function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function eventlastthree()
	{
		$this->db->select('*');
        $this->db->from('event');
        $this->db->join('event_cat','event_cat.eventcat_id=event.eventcat_id');
         $this->db->join('university','university.uni_id=event.uni_id');
        $this->db->where('event.deleted',0);
       $this->db->where('event.confirm',1);
        $this->db->where_not_in('event.eventcat_id',3);
         $this->db->order_by('event_id','asc');
         $this->db->limit(3);
       
        $query=$this->db->get();
       
		$result= $query->result_array();
		return $result;
	}
	function sponeventlastthree()
	{
		$this->db->select('*');
        $this->db->from('event');
        $this->db->join('event_cat','event_cat.eventcat_id=event.eventcat_id');
         $this->db->join('university','university.uni_id=event.uni_id');
        $this->db->where('event.deleted',0);
         $this->db->where('event.eventcat_id',3);
        
       
        $query=$this->db->get();
       
		$result= $query->result_array();
		return $result;
	}
	function eventgetall()
	{
		$this->db->select('*');
        $this->db->from('event');
        $this->db->join('event_cat','event_cat.eventcat_id=event.eventcat_id');
         $this->db->join('university','university.uni_id=event.uni_id');
        $this->db->where('event.deleted',0);
         $this->db->where('event.confirm',1);
        $this->db->where_not_in('event.eventcat_id',3);
         
       
        $query=$this->db->get();
       
		$result= $query->result_array();
		return $result;
	}
}	
