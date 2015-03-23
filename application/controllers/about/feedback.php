<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
	
	/* 默认前台控制器 */
class Feedback extends CI_Controller {
	
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'feedback_model', 'feedback' );
	}
	
	/* 默认首页显示方法 */
	public function index() {
		// echo 'hello';
		// echo base_url();
		$this->load->helper ( 'form' );
		$this->load->view ( 'about/feedbackList' );
	}
	
	// 添加 feedback
	public function addFeedback() {
		
		// 载入表单验证类
		$this->load->library ( 'form_validation' );
		// 设置验证
	
		 /* $this->form_validation->set_rules('title', '文章标题不为空', 'required'); 
		 $this->form_validation->set_rules('email', '作者不为空', 'required'); 
		 $this->form_validation->set_rules('mobile', '类型不为空', 'required'); 
		
		 $this->form_validation->set_rules('content', '内容不为空', 'required'); */
		 
		 // 执行验证
		$status = $this->form_validation->run ( 'contact1' ); 
		
		if ($status) {
			// 操作model层
			$data = array (
					'title' => $this->input->post ( 'title' ),
					'email' => $this->input->post ( 'email' ),
					'mobile' => $this->input->post ( 'mobile' ),
					'ctime' => time (),
					'content' => $this->input->post ( 'content' ) 
			);
			
		
			$this->contact->addFeedback ( $data );
			success ( '/about/contactUs', '留学资讯添加成功！' );
		} else {
			// 重载
			$this->load->helper ( 'form' );
			$this->load->view ( '/about/contactUs' );
		}
	}
	
	// 显示留学申请资讯列表
	public function feedbackList() {
		 
		//后台设置后缀为空，否则分页出错
		$this->config->set_item('url_suffix', '');
		//载入分页类
		$this->load->library('pagination');
		//每页显示数量
		$perPage = 4;
		 
		//配置项设置
		//controller的url
		$config['base_url'] = site_url('about/feedback/feedbackList');
		$config['total_rows'] = $this->db->count_all_results('feedback');
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
		 
		$data ['feedback'] = $this->feedback->feedbackList ();
		$this->load->view ( 'about/feedbackList', $data );
	}
	
	// 编辑文章
	public function editFeedback() {
		$id = $this->uri->segment ( 4 );
		
		$data ['feedback'] = $this->feedback->checkFeedback ( $id );
		
		$this->load->helper ( 'form' );
		$this->load->view ( 'about/editFeedback', $data );
	}
	// 编辑动作
	public function editArticle() {
		// 载入表单验证类
		$this->load->library ( 'form_validation' );
		// 执行验证
		$status = $this->form_validation->run ( 'contact' );
		
		if ($status) {
			$id = $this->input->post ( 'id' );
			
			$title = $this->input->post ( 'title' );
			$email = $this->input->post ( 'email' );
			
			$mobile = $this->input->post ( 'mobile' );

			$content = $this->input->post ( 'content' );
			
			$data = array (
					'title' => $title,
					'email' => $email,
					'ctime' => time(),
					'mobile' => $mobile,
					
					'content' => $content 
			);
			
			$data ['feedback'] = $this->feedback->updateFeedback ( $id, $data );
			success ( 'about/feedback/feedbackList', '留学资讯修改成功！' );
		} else {
			// 重载
			$this->load->helper ( 'form' );
			$this->load->view ( 'about/editFeedback' );
		}
	}
	// 删除留学资讯
	
	public function delFeedback() {
		$id = $this->uri->segment ( 4 );
	
		$this->feedback->delFeedback ( $id );
		success ( 'about/feedback/feedbackList', '留学资讯删除成功！' );
	}
	
	
	
}