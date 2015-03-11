<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AppCountry extends MY_Controller{
    
    
	public function appUSA(){
	    $this->load->view('apply/applycountry/usa');
	}
	public function appUK(){
	    $this->load->view('apply/applycountry/uk');
	}
	public function appHK(){
	    $this->load->view('apply/applycountry/hk');
	}
	public function appAUS(){
	    $this->load->view('apply/applycountry/aus');
	}
	public function appSingapore(){
	    $this->load->view('apply/applycountry/singapore');
	}
	
	
}