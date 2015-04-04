<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//申请案例模型

class Appcase_model extends CI_Model{
	//全部查询
	public function appCaseList(){
	    //添加查询条件，降序
	    $this->db->order_by('cid','DESC');
		$data = $this->db->get('applycase')->result_array();
		return $data;
	}
	
	//条件查询
	public function checkAppCaseById($id){
		$data = $this->db->where(array('cid'=>$id))->get('applycase')->result_array();
		return $data;
	}
	
	//添加
	public function addAppCase($data){
		$this->db->insert('applycase',$data);
	}
	
	//修改
	public function updateAppCase($id, $data){
		$this->db->update('applycase', $data, array('cid'=>$id));	
	}
	//删除
	public function delAppCase($id){
		$this->db->delete('applycase', array('cid'=>$id));
	}
	
	//统计总数量：
	public function get_column($num,$offset){
		$query=$this->db->get('column',$num,$offset);
		return $query->result_array();
	}
}