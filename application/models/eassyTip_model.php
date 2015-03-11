<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//留学申请资讯模型

class EassyTip_Model extends CI_Model{
	//添加
	public function addEassyTip($data){
		$this->db->insert('eassytip',$data);
	}
	//全部查询
	public function eassyTipList(){
		$data = $this->db->get('eassytip')->result_array();
		return $data;
	}
	//条件查询
	public function checkEassyTip($id){
		$data = $this->db->where(array('id'=>$id))->get('eassytip')->result_array();
		return $data;
	}
	
	//修改动作
	public function updateEassyTip($id, $data){
		$this->db->update('eassytip', $data, array('id'=>$id));	
	}
	//删除
	public function delEassyTip($id){
		$this->db->delete('eassytip', array('id'=>$id));
	}
}