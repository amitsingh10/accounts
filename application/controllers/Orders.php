<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Orders extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('WooCommerce');
		
		$consumer_key    = 'ck_8f004a719b9a4a8719aede4c766f2a1520aeca26';
    	$consumer_secret = 'cs_5cdd6963c8d518addd8d690d57abbef961879aee';
    	$store_url       = 'http://carovna-slova.cz/';
		
		$this->woocommerce->api( $consumer_key, $consumer_secret, $store_url );
		
	}


	public function index(){
	 //$this->load->helper('form');
	 $data2['massege'] = '';
		 if ($this->input->post('submit')==true) {
		
			$data['username']=$this->input->post('username',true);
			$data['password']=$this->input->post('password',true);
	  
			 $this->load->model('user_model');
			$data2['massege']=$this->user_model->insert($data);
			
			}
	 $this->smarty->view('test.tpl',$data2);
	 
	}
	public function adduser(){
	
	 if ($this->input->post('submit')==true) {
	
 		$data['username']=$this->input->post('username',true);
		$data['password']=$this->input->post('password',true);
  //$this->load->view('result',$data);
  		 $this->load->model('user_model');
 $data2=$this->user_model->insert($data);
 
 		}

	 
	}
	
	public function carovna_slova_order(){
		
		$orders = $this->woocommerce->get_orders(array('filter[limit]' => '500' ));
		//echo '<pre>';
		//print_r($orders);
		/*foreach($orders->orders as $norder ){
			echo $norder->id.'<br>';
		
		}*/
		$data['header_css'] = array('demo.css');
		$data['header_js']  = array('bootstrap-notify.js');
		
		$this->smarty->assign('selected_page', 'orders');
		$this->smarty->assign('items', $orders->orders);
		
		$data['base_url'] = base_url();
		$data['title'] = 'hello world';
		$this->smarty->view('orders.tpl',$data);
	}

}