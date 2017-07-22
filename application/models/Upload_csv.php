<?php

class Upload_csv extends CI_Model
{
	public function import($data){
	
	$this->load->database();
	
	$d = $this->db->insert('data1', $data);
	if($d){
	return 'data save';
	}else{
	return 'data not save';
	}
	}
	
	public function import_secondfile($data){
	
	$this->load->database();
	
	$d = $this->db->insert('data2', $data);
	if($d){
	return 'data save';
	}else{
	return 'data not save';
	}
	}
}