<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//留学申请资讯模型

class Feedback_model extends CI_Model{
	//添加
	public function addFeedback($data){
		$this->db->insert('feedback',$data);
	}
	//全部查询
	public function feedbackList(){
		//添加查询条件，降序
		$this->db->order_by('id','DESC');
		$data = $this->db->get('feedback')->result_array();
		return $data;
	}
	//条件查询
	public function checkFeedback($id){
		$data = $this->db->where(array('id'=>$id))->get('feedback')->result_array();
		return $data;
	}
	
	//修改动作
	public function updateFeedback($id, $data){
		$this->db->update('feedback', $data, array('id'=>$id));	
	}
	//删除
	public function delFeedback($id){
		$this->db->delete('feedback', array('id'=>$id));
	}
}