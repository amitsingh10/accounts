<?php

class User_model extends CI_Model
{
	public function insert($data){
	
	$this->load->database();
	$ndata = array(
'username' => $data['username'],
'password' => $data['password']
);
	$d = $this->db->insert('user', $ndata);
	if($d){
	return 'data save';
	}else{
	return 'data not save';
	}
	}
}