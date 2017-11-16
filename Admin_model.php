<?php 
class Admin_model extends CI_Model
{
    function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	function sponsorcreate($data)
	{
		//var_dump($data);die();
		$query=$this->db->insert('sponser',$data);
		//var_dump($query);die();
		return $query;
	}
	function eventcreate($data)
	{
		$query=$this->db->insert('event',$data);
	
		return $query;
	}
	function sponsorgetall()
	{
		$this->db->select('*');
        $this->db->from('sponser');
        $this->db->join('spon_cat','spon_cat.sponcat_id=sponser.cat_id');
        //$this->db->where('user.deleted',0);
        //$this->db->where_not_in('user.role_id',0);
       
        $query=$this->db->get();
       
		return $query->result_array();
		

	}
	function unigetall()
	{
		$this->db->select('*');
        $this->db->from('university');
       
       
        $query=$this->db->get();
       
		return $query->result_array();
	}
	function orggetall()
	{
$this->db->select('*');
        $this->db->from('event_org');
       
       
        $query=$this->db->get();
       
		return $query->result_array();
			}
			function eventcatgetall()
			{
				$this->db->select('*');
                $this->db->from('event_cat');
                $query=$this->db->get();
		        return $query->result_array();
			}
	function eventgetall()
	{
		$this->db->select('*');
        $this->db->from('event');
         $this->db->join('event_cat','event_cat.eventcat_id=event.eventcat_id');
         $this->db->join('university','university.uni_id=event.uni_id');
          $this->db->join('event_org','event_org.eventorg_id=event.org_id');
        $this->db->where('event.deleted',0);
        $this->db->where('event.confirm',0);
        //$this->db->where_not_in('user.role_id',0);
       
        $query=$this->db->get();
       
		$result= $query->result_array();
		//var_dump($result);die();
		return $result;
	}
	function eventgetselected($id)
	{
		$this->db->select('*');
        $this->db->from('event');
         $this->db->join('event_cat','event_cat.eventcat_id=event.eventcat_id');
         $this->db->join('university','university.uni_id=event.uni_id');
        $this->db->where('event.deleted',0);
        $this->db->where('event.event_id',$id);
        //$this->db->where_not_in('user.role_id',0);
       
        $query=$this->db->get();
       
		$result= $query->row();
		// var_dump($result);die();
		return $result;
	}
	function eventconfirm($id)
	{
		 $data=array('confirm'=>1);
		 $query=$this->db->update('event',$data,array('event_id'=>$id));
		
		
		var_dump($query);die();
		return $query;
	}
	function sponcatgetall()
	{
		$this->db->select('*');
        $this->db->from('spon_cat');
       
        //$this->db->where('user.deleted',0);
        //$this->db->where_not_in('user.role_id',0);
       
        $query=$this->db->get();
       
		return $query->result_array();
	}
	function unconfirmevent()
	{
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('event.deleted',0);
		$this->db->where('event.confirm',0);
		$result=$this->db->count_all_results();
		return $result;
	}
	function confirmevent()
	{
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('event.deleted',0);
		$this->db->where('event.confirm',1);
		$result=$this->db->count_all_results();
		return $result;
	}
	function eventsponsor()
	{
		$this->db->select('*');
		$this->db->from('sponser');
		
		$result=$this->db->count_all_results();
		return $result;
	}


}	
?>
