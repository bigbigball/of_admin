<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//文书案例模型

class Appevaluate_model extends CI_Model{
	//全部查询
	public function appEvaluationList(){
		//添加查询条件，降序
		$this->db->order_by('id','DESC');
		$data = $this->db->get('evaluation')->result_array();
		return $data;
	}
	
	//条件查询
	public function checkAppEvaluationByID($id){
		$data = $this->db->where(array('id'=>$id))->get('evaluation')->result_array();
		return $data;
	}
	
	//添加
	public function addAppEvaluation($data){
		$this->db->insert('evaluation',$data);
	}

	//修改
	public function updateAppEvaluation($id, $data){
		$this->db->update('evaluation', $data, array('id'=>$id));	
	}
	
	//删除
	public function delAppEvaluation($id){
		$this->db->delete('evaluation', array('id'=>$id));
	}
	
	//统计总数量：
	public function get_column($num,$offset){
		$query=$this->db->get('column',$num,$offset);
		return $query->result_array();
	}
}