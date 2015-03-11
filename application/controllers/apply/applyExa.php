<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ApplyExa extends MY_Controller{
	
	//添加控制
	public function addExa(){
		$this->load->helper('form');
		$this->load->view('apply/applyexa/addAppExa');
	}
	
	//添加案例
	public function addAppExa(){
		//载入表单验证类
		$this->load->library('form_validation');
		
		//执行验证
		$status = $this->form_validation->run('applyexa');
		
		if($status){
			echo '数据库操作';
		}else{
			//重载
			$this->load->helper('form');
			$this->load->view('apply/applyexa/addAppExa');
		}
	}
	//修改控制
	public function editExa(){
		$this->load->helper('form');
		$this->load->view('apply/applyexa/editAppExa');
	}
	
	//修改案例
	public function editAppExa(){
		//载入表单验证类
		$this->load->library('form_validation');
	
		//执行验证
		$status = $this->form_validation->run('applyexa');
	
		if($status){
			echo '数据库操作';
		}else{
			//重载
			$this->load->helper('form');
			$this->load->view('apply/applyexa/editAppExa');
		}
	}
}