<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//留学申请资讯模型

class AppTip_Model extends CI_Model{
	//添加
	public function addAppTip($data){
		$this->db->insert('applytip',$data);
	}
	//全部查询
	public function appTipList(){
		$data = $this->db->get('applytip')->result_array();
		return $data;
	}
	//条件查询
	public function checkAppTip($id){
		$data = $this->db->where(array('id'=>$id))->get('applytip')->result_array();
		return $data;
	}
	
	//修改动作
	public function updateAppTip($id, $data){
		$this->db->update('applytip', $data, array('id'=>$id));	
	}
	//删除
	public function delAppTip($id){
		$this->db->delete('applytip', array('id'=>$id));
	}
}