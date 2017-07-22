<?php

class Showdata_model extends CI_Model
{
		function getdata(){
		$this->load->database();
		$query = $this->db->get('data1');  
         return $query;
		 
		 }
		 function getdata2(){
		$this->load->database();
		$query = $this->db->get('data2');  
         return $query;
		 
		 }
		 
		 function getdata_by_id($id){
		 $this->load->database();
			$this->db->select('*');
			$this->db->where('id', $id);
			$q = $this->db->get('data1');
			 $data = $q->result_array();
			 $date = $data[0]['date'];
			 $note = $data[0]['note'];
			 $name = $data[0]['name'];
			 $ac = $data[0]['account_number'];
			 $vl = $data[0]['value'];
			 $u1 = $data[0]['usage1'];
			 $u2 = $data[0]['usage2'];
			 $amount = $data[0]['amount'];

			
			return $redata = "<div class='container'>
 
  <form >
  <div class='row'>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Date:</label>
			<input type='text' class='form-control' id='date'  name='date' value='$date' >
			<input type='hidden' value='$id' name='id' id='id'>
		</div>
	 </div>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Note:</label>
			<input type='text' class='form-control' id='note'  name='note' value='$note' >
		</div>
	  </div>
  </div>
  <div class='row'>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Name:</label>
			<input type='text' class='form-control' id='name'  name='name' value='$name' >
		</div>
	 </div>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Account Number:</label>
			<input type='text' class='form-control' id='ac' name='ac' value='$ac' >
		</div>
	  </div>
  </div>
  <div class='row'>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Value:</label>
			<input type='text' class='form-control' id='vl' name='vl' value='$vl' >
		</div>
	 </div>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Usage 1:</label>
			<input type='text' class='form-control' id='u1' name='u1' value='$u1' >
		</div>
	  </div>
  </div>
  <div class='row'>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Usage 2:</label>
			<input type='text' class='form-control' id='u2' name='u2' value='$u2' >
		</div>
	 </div>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Amount:</label>
			<input type='text' class='form-control' id='amount' name='amount' value='$amount' >
		</div>
	 </div>
  </div>
    
    
  </form>
</div>
</div>
<div class='modal-footer'>
					<button type='button' class='btn btn-danger' data-dismiss='modal'>Cancle</button>
					<button type='button' class='btn btn-success' onclick='update_data1();'>Save</button>
";
		 
		 }
		 
		 function getdata2_by_id($id){
		 $this->load->database();
			$this->db->select('*');
			$this->db->where('id', $id);
			$q = $this->db->get('data2');
			 $data = $q->result_array();
			 $date = $data[0]['date'];
			 $value = $data[0]['value'];
			 $name1 = $data[0]['name1'];
			 $name2 = $data[0]['name2'];
			 $account_iban = $data[0]['account_iban'];
			 $bic_swift = $data[0]['bic_swift'];
			 $note = $data[0]['note'];
			 $currency = $data[0]['currency'];
			 $amount = $data[0]['amount'];

			
			return $redata = "<div class='container'>
 
  <form >
  <div class='row'>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Date:</label>
			<input type='text' class='form-control' id='date'  name='date' value='$date' >
			<input type='hidden' value='$id' name='id' id='id'>
		</div>
	 </div>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Value:</label>
			<input type='text' class='form-control' id='value'  name='value' value='$value' >
		</div>
	  </div>
  </div>
  <div class='row'>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Name1:</label>
			<input type='text' class='form-control' id='name1'  name='name1' value='$name1' >
		</div>
	 </div>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Name2:</label>
			<input type='text' class='form-control' id='name2' name='name2' value='$name2' >
		</div>
	  </div>
  </div>
  <div class='row'>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Account IBAN:</label>
			<input type='text' class='form-control' id='account_iban' name='account_iban' value='$account_iban' >
		</div>
	 </div>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>BIC/Swift:</label>
			<input type='text' class='form-control' id='bic_swift' name='bic_swift' value='$bic_swift' >
		</div>
	  </div>
  </div>
  <div class='row'>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Note:</label>
			<input type='text' class='form-control' id='note' name='note' value='$note' >
		</div>
	 </div>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Currency:</label>
			<input type='text' class='form-control' id='currency' name='currency' value='$currency' >
		</div>
	 </div>
	 <div class='col-md-3'>
		<div class='form-group label-floating'>
			<label class='control-label'>Amount:</label>
			<input type='text' class='form-control' id='amount' name='amount' value='$amount' >
		</div>
	 </div>
  </div>
    
    
  </form>
</div>
</div>
<div class='modal-footer'>
					<button type='button' class='btn btn-danger' data-dismiss='modal'>Cancle</button>
					<button type='button' class='btn btn-success' onclick='update_data2();'>Save</button>
";
		 
		 }
		 
		 
		 function update_data_by_id($data,$id){
		 	$this->load->database();
		 	$this->db->where('id', $id);
		 $q=$this->db->update('data1', $data);
			 if($q){
				return $d = "<h2>Data Updated Successfully</h2></div>
<div class='modal-footer' style='text-align:center;'>
					<a href='' class='btn btn-success' >Ok</a>";
			 }else{
			 return $d = "<h2 style='color:red'>Data NOT Updated Successfully</h2></div>
<div class='modal-footer' style='text-align:center;'>
					<button type='button' class='btn btn-danger' data-dismiss='modal'>Ok</button>";
			 }
		 }
		 
		 function update_data2_by_id($data,$id){
		 	$this->load->database();
		 	$this->db->where('id', $id);
		 $q=$this->db->update('data2', $data);
			 if($q){
				return $d = "<h2>Data Updated Successfully</h2></div>
<div class='modal-footer' style='text-align:center;'>
					<a href='' class='btn btn-success' >Ok</a>";
			 }else{
			 return $d = "<h2 style='color:red'>Data NOT Updated Successfully</h2></div>
<div class='modal-footer' style='text-align:center;'>
					<button type='button' class='btn btn-danger' data-dismiss='modal'>Ok</button>";
			 }
		 }
		 
		function deletedata_by_id($id){
			$this->load->database();
		 	$this->db->where('id', $id);
		 $q=$this->db->delete('data1');
		 
			 if($q){
				return $d = "<h2>Data Deleted Successfully</h2></div>
<div class='modal-footer' style='text-align:center;'>
					<a href='' class='btn btn-success' >Ok</a>";
			 }else{
			 return $d = "<h2 style='color:red'>Data NOT Deleted Successfully</h2></div>
<div class='modal-footer' style='text-align:center;'>
					<button type='button' class='btn btn-danger' data-dismiss='modal'>Ok</button>";
			 }
		}
		 
		 
		 function deletedata2_by_id($id){
			$this->load->database();
		 	$this->db->where('id', $id);
		 $q=$this->db->delete('data2');
		 
			 if($q){
				return $d = "<h2>Data Deleted Successfully</h2></div>
<div class='modal-footer' style='text-align:center;'>
					<a href='' class='btn btn-success' >Ok</a>";
			 }else{
			 return $d = "<h2 style='color:red'>Data NOT Deleted Successfully</h2></div>
<div class='modal-footer' style='text-align:center;'>
					<button type='button' class='btn btn-danger' data-dismiss='modal'>Ok</button>";
			 }
		}
}