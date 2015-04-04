<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AppEvaluation extends MY_Controller{
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'appevaluate_model', 'eva' );
		$this->status_nToc = array(0=>'未审核',1=>'已邮件通知',2=>'已电话通知');
		$this->outdegree_nToc = array(0=>'大学',1=>'硕士',2=>'博士');
		$this->ctype_nToc = array(0=>'211大学',1=>'985大学',2=>'其他');
		$this->gender_nToc = array(0=>'男',1=>'女');
		$this->maxdegree_nToc = array(0=>'高中',1=>'大学',2=>'硕士');
	}
	
	public function appEvaluationList(){
		//后台设置后缀为空，否则分页出错
		$this->config->set_item('url_suffix', '');
		//载入分页类
		$this->load->library('pagination');
		//每页显示数量
		$perPage = 1;
		
		//配置项设置
		$config['base_url'] = site_url('apply/appEvaluation/appEvaluationList');
		$config['total_rows'] = $this->db->count_all_results('evaluation');
		$config['per_page'] = $perPage;
		$config['uri_segment'] = 4;
		$config['first_link'] = '首页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['last_link'] = '尾页';
		
		$this->pagination->initialize($config);
		
		$data['links'] = $this->pagination->create_links();
		//p($data);die;
		$offset = $this->uri->segment(4);
		$this->db->limit($perPage, $offset);
		
		$evaluations = $this->eva->appEvaluationList();
		
		
		foreach($evaluations as &$v){ //编号转文本
			if(empty($v['author'])) $v['author'] = "无";
			$v['status'] = $this->status_nToc[$v['status']];
			if(empty($v['utime']))  
				$v['utime'] = "无";
			else
				$v['utime'] = date("Y-m-d", $v['utime']);
		}
		
		$data ['evaluation'] = $evaluations;
		$this->load->view('apply/evaluation/appEvaluationList', $data);
	}
	
	//审核留学评估
	public function editAppEvaluation(){
		$id = $this->uri->segment ( 4 );
	
		$evaluation = $this->eva->checkAppEvaluationByID ( $id );
		
		//error($data['evaluation'][0]['status']);
		
		foreach($evaluation as &$v){ //编号转文本
			if(empty($v['author'])) $v['author'] = "无";
			$v['status'] = $this->status_nToc[$v['status']];
			if(empty($v['utime']))
				$v['utime'] = "无";
			else
				$v['utime'] = date("Y-m-d", $v['utime']);
			$v['outtime'] = date("Y-m-d", $v['outtime']);
			$v['outdegree'] = $this->outdegree_nToc[$v['outdegree']];
			$v['ctype'] = $this->ctype_nToc[$v['ctype']];
			$v['gender'] = $this->gender_nToc[$v['gender']]; 
			$v['maxdegree'] = $this->maxdegree_nToc[$v['maxdegree']];
		}
	
		$data ['evaluation'] = $evaluation;
		$this->load->helper('form');
		$this->load->view('apply/evaluation/editAppEvaluation', $data);
	}
	
	//编辑留学评估
	public function editArticle(){
		//载入表单验证类
		$this->load->library('form_validation');
		//执行验证
		//$status = $this->form_validation->run('appcase');
	    $status = true;
		if($status){	
			$id = $this->input->post ( 'id' );
			// 操作model层
			$data = array (
					'status'=> $this->input->post ( 'status' ),
					'author' => $this->input->post ( 'author' ),
					'utime' => time(),
			);
			$data ['evaluation'] = $this->eva->updateAppEvaluation ( $id, $data );
			success ( 'apply/appEvaluation/appEvaluationList', '申请案例修改成功！' );
		}else{
			//重载
			$data ['case'][] = array (
					'status'=> $this->input->post ( 'status' ),
					'author' => $this->input->post ( 'author' ),
			);
				
			$this->load->helper('form');
			$this->load->view('apply/evaluation/editAppEvaluation', $data);
		}
	}
	// 删除留学评估
	public function delAppEvaluation() {
		$id = $this->uri->segment ( 4 );
		$this->eva->delAppEvaluation ( $id );
		success ( 'apply/appEvaluation/appEvaluationList', '评估资料删除成功！' );
	}
	
	
	
}