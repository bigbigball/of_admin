<?php

$config = array(
	'applytip' => array(
		array(
		    'field' => 'title',
			'label' => '标题',
			'rules' => 'required|min_length[5]',
	        ),
		array(
			'field' => 'author',
			'label' => '发布人',
			'rules' => 'required',
			),
			array(
					'field' => 'ctime',
					'label' => '发表时间',
					'rules' => 'required',
			),
		array(
			'field' => 'type',
			'label' => '类型',
			'rules' => 'required',
			),
			array(
					'field' => 'source',
					'label' => '来源',
					'rules' => '',
			),
			array(
					'field' => 'position',
					'label' => '显示位置',
					'rules' => '',
			),
			array(
					'field' => 'status',
					'label' => '发布状态',
					'rules' => 'required',
			),
		array(
			'field' => 'desc',
			'label' => '摘要',
			'rules' => 'required|max_length[200]',
			),
		array(
			'field' => 'content',
			'label' => '内容',
			'rules' => 'required',
		    ),
    ),
	'eassytip' => array(
		array(
		    'field' => 'title',
			'label' => '标题',
			'rules' => 'required|min_length[5]',
	        ),
		array(
			'field' => 'author',
			'label' => '发布人',
			'rules' => 'required',
			),
			array(
					'field' => 'ctime',
					'label' => '发表时间',
					'rules' => 'required',
			),
		array(
			'field' => 'type',
			'label' => '类型',
			'rules' => 'required',
			),
			array(
					'field' => 'source',
					'label' => '来源',
					'rules' => '',
			),
			array(
					'field' => 'position',
					'label' => '显示位置',
					'rules' => '',
			),
			array(
					'field' => 'status',
					'label' => '发布状态',
					'rules' => 'required',
			),
		array(
			'field' => 'desc',
			'label' => '摘要',
			'rules' => 'required|max_length[200]',
			),
		array(
			'field' => 'content',
			'label' => '内容',
			'rules' => 'required',
		    ),
	),
	'applyexa' => array(
		array(
			'field' => 'title',
			'label' => '标题',
			'rules' => 'required|min_length[5]',
		),
	    array(
			'field' => 'author',
			'label' => '发布人',
			'rules' => 'required',
		),
				
	),
		'eassyexa' => array(
				array(
						'field' => 'title',
						'label' => '标题',
						'rules' => 'required|min_length[5]',
				),
				array(
						'field' => 'author',
						'label' => '发布人',
						'rules' => 'required',
				),
		
	),
		
	'apply_country' => array( //添加国家留学检测
			array(
					'field' => 'title',
					'label' => '标题',
					'rules' => 'required|min_length[5]',
			),
			array(
					'field' => 'author',
					'label' => '发布人',
					'rules' => 'required',
			),
			array(
					'field' => 'content',
					'label' => '内容',
					'rules' => 'required',
			),
	),
		'appcase' => array(
				array(
						'field' => 'case_title',
						'label' => '案例标题',
						'rules' => 'required|min_length[5]',
				),
				array(
						'field' => 'academy_name',
						'label' => '申请学校',
						'rules' => 'required|min_length[4]',
				),
				array(
						'field' => 'author',
						'label' => '发布人',
						'rules' => 'required',
				),
				array(
						'field' => 'case_content',
						'label' => '案例正文',
						'rules' => 'required',
				),
		),
		'contact' => array(
				array(
						'field' => 'title',
						'label' => '主题',
						'rules' => 'required',
				),
				array(
						'field' => 'email',
						'label' => 'email',
						'rules' => 'required|valid_email',
				),
				array(
						'field' => 'mobile',
						'label' => '电话',
						'rules' => 'required',
				),
				array(
						'field' => 'content',
						'label' => '留言',
						'rules' => 'required',
				),
		
		),
);