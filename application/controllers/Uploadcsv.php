<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Uploadcsv extends CI_Controller {

	

	public function index(){
	 
	 $data['base_url'] = base_url();
		$data['title'] = 'hello world';
	 $this->smarty->view('uploadcsv.tpl',$data);
	 
	}
	
	public function import(){
	$this->load->library('session');
	
 if(isset($_POST["import"]))
  {
  $this->load->model("Upload_csv");
      $filename=$_FILES["file"]["tmp_name"];
	  
      if($_FILES["file"]["size"] > 0)
        {
          $file = fopen($filename, "r");
		  $i  =   1;
           while (($importdata = fgetcsv($file, 10000, ";")) !== FALSE)
           {
               if($i>2){
			      $data = array(
                      'date' => $importdata[0],
                      'note' =>$importdata[1],
					  'name' => $importdata[2],
                      'account_number' =>$importdata[3],
					  'value' => $importdata[4],
                      'usage1' =>$importdata[5],
					  'usage2' => $importdata[6],
                      'amount' =>$importdata[7],
					  //'created_date' => date('Y-m-d'),
                      );
           			$insert = $this->Upload_csv->import($data);
		   		}
		   		$i++;
           }                    
          			fclose($file);
		  
					redirect('uploadcsv');

        		}else{

					redirect('uploadcsv/index2');
    			}
  			}
		}
		
		
		
		public function import_second_csv(){
	$this->load->library('session');
	
 if(isset($_POST["import"]))
  {
  $this->load->model("Upload_csv");
      $filename=$_FILES["file"]["tmp_name"];
	  
      if($_FILES["file"]["size"] > 0)
        {
          $file = fopen($filename, "r");
		  $i  =   1;
           while (($importdata = fgetcsv($file, 10000, ";")) !== FALSE)
           {
               if($i>3){
			      $data = array(
                      'date' => $importdata[0],
                      'value' =>$importdata[1],
					  'name1' => $importdata[2],
                      'name2' =>$importdata[3],
					  'account_iban' => $importdata[4],
                      'bic_swift' =>$importdata[5],
					  'note' => $importdata[6],
                      'currency' =>$importdata[7],
					  'amount' =>$importdata[8],
					  
                      );
           			$insert = $this->Upload_csv->import_secondfile($data);
		   		}
		   		$i++;
           }                    
          			fclose($file);
		  
					redirect('uploadcsv');

        		}else{

					redirect('uploadcsv/index2');
    			}
  			}
		}
	
}