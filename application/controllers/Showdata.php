<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Showdata extends CI_Controller {
	
	
	public function index(){
	$this->load->model('Showdata_model');
 $data1=$this->Showdata_model->getdata();

		$this->smarty->assign('selected_page', 'showdata');
		$this->smarty->assign('items', $data1->result());
		
		$data['header_js']  = array('edit_delete.js');
		$data['base_url'] = base_url();
		$data['title'] = 'hello world';
		$this->smarty->view('showdata.tpl',$data);
	}
	
	public function data2(){
		$this->load->model('Showdata_model');
 		$data1=$this->Showdata_model->getdata2();

		$this->smarty->assign('selected_page', 'showdata2');
		$this->smarty->assign('items', $data1->result());
		
		$data['header_js']  = array('tableHeadFixer.js','edit_delete2.js');
		$data['base_url'] = base_url();
		$data['title'] = 'hello world';
		$this->smarty->view('showdata2.tpl',$data);
	}
	
	public function getdatabyid(){
	$id = $this->uri->segment(3);
	$this->load->model('Showdata_model');
 	echo  $data1=$this->Showdata_model->getdata_by_id($id);

	}
	public function getdata2byid(){
	$id = $this->uri->segment(3);
	$this->load->model('Showdata_model');
 	echo  $data1=$this->Showdata_model->getdata2_by_id($id);

	}
	
	public function updatedata2byid(){
	
	$data = array(
                      'date' => $this->input->post('date',true),
                      'value' =>$this->input->post('value',true),
					  'name1' => $this->input->post('name1',true),
                      'name2' =>$this->input->post('name2',true),
					  'account_iban' => $this->input->post('account_iban',true),
                      'bic_swift' =>$this->input->post('bic_swift',true),
					  'note' => $this->input->post('note',true),
                      'currency' =>$this->input->post('currency',true),
					  'amount' =>$this->input->post('amount',true),
					  
                      );
	$id = $this->input->post('id',true);
	$this->load->model('Showdata_model');
 	echo  $data1=$this->Showdata_model->update_data2_by_id($data,$id);
	}
	
	function deletedata2byid(){
	$id = $this->uri->segment(3);
	$this->load->model('Showdata_model');
 	echo  $data1=$this->Showdata_model->deletedata2_by_id($id);
	}
	function deletedatabyid(){
	$id = $this->uri->segment(3);
	$this->load->model('Showdata_model');
 	echo  $data1=$this->Showdata_model->deletedata_by_id($id);
	}

}