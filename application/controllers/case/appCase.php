<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AppCase extends MY_Controller{
	
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'appcase_model', 'case' );
		$this->country_eToc = array('0'=>'美国','1'=>'英国','2'=>'香港','3'=>'澳洲','4'=>'新加坡');
	}
	
	//留学案例学校列表页面-带分页
	public function appCaseList(){
		//后台设置后缀为空，否则分页出错
		$this->config->set_item('url_suffix', '');
		//载入分页类
		$this->load->library('pagination');
		//每页显示数量
		$perPage = 5;
		
		//配置项设置
		$config['base_url'] = site_url('case/appCase/appCaseList');
		$config['total_rows'] = $this->db->count_all_results('applycase');
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
		
		$academies = $this->case->appCaseList ();
		
		foreach($academies as &$v){ //编号转文本
			$v['country'] = $this->country_eToc[$v['country']];
		}
		
		$data ['case'] = $academies;
	    $this->load->view('case/appCaseList', $data);
	}
	
	//展示页点击添加跳转至新增页
	public function addAppCase(){
		$this->load->helper('form');
		$this->load->view('case/addAppCase');
	}
	
	//添加案例学校
	public function addArticle(){
		//载入表单验证类
		$this->load->library('form_validation');
		
		//执行验证
		$status = $this->form_validation->run('appcase');
		
		if($status){
			//文件上传------------------------
			//配置
			$config['upload_path'] = './style/uploads/appcase';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '10000';
			$config['file_name'] = time() . mt_rand(1000,9999);
			
			//载入上传类
			$this->load->library('upload', $config);
			//执行上传
			$status = $this->upload->do_upload('thumb');
			$wrong = $this->upload->display_errors();
			
			if($wrong){
				error($wrong);
			}
			//返回信息
			$info = $this->upload->data();
			//p($info);die;
			
			//缩略图-----------------
			//配置
			$arr['source_image'] = $info['full_path'];
			$arr['create_thumb'] = FALSE;
			$arr['maintain_ratio'] = TRUE;
			$arr['width'] = 442;
			$arr['height'] = 264;
			
			//载入缩略图类
			$this->load->library('image_lib', $arr);
			//执行动作
			$status = $this->image_lib->resize();
			
			if(!$status){
				error('缩略图动作失败');
			}
			
			// 操作model层
			$data = array (
					'case_title'=> $this->input->post ( 'case_title' ),
					'academy' => $this->input->post ( 'academy_name' ),
					'country' => $this->input->post ( 'country' ),
					'author' => $this->input->post ( 'author' ),
					'thumb' => $info['file_name'],
					'position' => $this->input->post ( 'position' ),
					'case_content'=> $this->input->post( 'case_content' ),
					'ctime' => time(),
			);
				
			$this->case->addAppCase($data);
			success ( 'case/appCase/appCaseList', '申请案例添加成功！' );
			
		}else{
			//重载
			$this->load->helper('form');
			$this->load->view('case/addAppCase');
		}
	}
	
	//编辑申请案例
	public function editAppCase(){
		$id = $this->uri->segment ( 4 );
		
		$data ['case'] = $this->case->checkAppCaseByID ( $id );
		
		$this->load->helper('form');
		$this->load->view('case/editAppCase', $data);
	}
	
	//编辑案例学校
	public function editArticle(){
		//载入表单验证类
		$this->load->library('form_validation');
		//执行验证
		$status = $this->form_validation->run('appcase');

		if($status){
		    
		    //文件上传------------------------
		    //配置
		    $config['upload_path'] = './style/uploads/appcase';
		    $config['allowed_types'] = 'gif|jpg|png|jpeg';
		    $config['max_size'] = '10000';
		    $config['file_name'] = time() . mt_rand(1000,9999);
		    	
		    //载入上传类
		    $this->load->library('upload', $config);
		    //执行上传
		    $status = $this->upload->do_upload('thumb');
		    $wrong = $this->upload->display_errors();
		    	
		    if($wrong){
		        error($wrong);
		    }
		    //返回信息
		    $info = $this->upload->data();
		    //p($info);die;
		    	
		    //缩略图-----------------
		    //配置
		    $arr['source_image'] = $info['full_path'];
		    $arr['create_thumb'] = FALSE;
		    $arr['maintain_ratio'] = TRUE;
		    $arr['width'] = 442;
		    $arr['height'] = 264;
		    	
		    //载入缩略图类
		    $this->load->library('image_lib', $arr);
		    //执行动作
		    $status = $this->image_lib->resize();
		    	
		    if(!$status){
		        error('缩略图动作失败');
		    }
		    
			$id = $this->input->post ( 'id' );
			// 操作model层
			$data = array (
					'case_title'=> $this->input->post ( 'case_title' ),
					'academy' => $this->input->post ( 'academy_name' ),
					'country' => $this->input->post ( 'country' ),
					'author' => $this->input->post ( 'author' ),
					'thumb' => $info['file_name'],
					'position' => $this->input->post ( 'position' ),
					'case_content'=> $this->input->post( 'case_content' ),
					'ctime' => time(),
			);
			$data ['case'] = $this->case->updateAppCase ( $id, $data );
			success ( 'case/appCase/appCaseList', '申请案例修改成功！' );
		}else{
			//重载
			$data ['case'][] = array (
					'cid' => $this->input->post ( 'id' ),
					'case_title'=> $this->input->post ( 'case_title' ),
					'academy' => $this->input->post ( 'academy_name' ),
					'country' => $this->input->post ( 'country' ),
					'author' => $this->input->post ( 'author' ),
					'position' => $this->input->post ( 'position' ),
					'case_content'=> $this->input->post( 'case_content' ),
			);
			
			$this->load->helper('form');
			$this->load->view('case/editAppCase', $data);
		}
	}
	
	// 删除案例学校
	public function delAppCase() {
		$cid = $this->uri->segment ( 4 );
		$this->case->delAppCase ( $cid );
		success ( 'case/appCase/appCaseList', '申请案例删除成功！' );
	}	
}