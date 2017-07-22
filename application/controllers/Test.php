<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller {
Public function _construct() { Parent::_construct(); }
function index(){

		$this->smarty->assign('selected_page', 'test');
		
		$this->smarty->view('test.tpl');
}

}