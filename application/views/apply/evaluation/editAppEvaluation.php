<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #F8F9FA;
	font-size: 12px;
}

.fs {
	font-size: 12px;
}
span{
	color:red;
	font-size:12px;
}
</style>


<link rel="stylesheet"
	href="<?php echo base_url().'style/' ?>css/common.css">
<link rel="stylesheet"
	href="<?php echo base_url().'style/' ?>css/main1.css">


<script type="text/javascript"
	src="<?php echo base_url().'style/' ?>js/jquery.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url().'style/' ?>js/colResizable-1.3.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url().'style/' ?>js/common.js"></script>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<script type="text/javascript" src="<?php echo base_url().'style/' ?>ueditor/ueditor.config.js"></script>
   <script type="text/javascript" src="<?php echo base_url().'style/' ?>ueditor/ueditor.all.js"></script>
	
	

<script type="text/javascript">
	    window.UEDITOR_CONFIG.UEDITOR_HOME_URL = '<?php echo base_url().'style/' ?>ueditor/'; 
	    window.onload = function(){
	    	window.UEDITOR_CONFIG.initialFrameWidth = 800;
	    	window.UEDITOR_CONFIG.initialFrameHeight = 220;
	    	UE.getEditor('content');  
	    }
	</script>

<body>
	<link href="<?php echo base_url().'style/' ?>css/main.css"
		rel="stylesheet" type="text/css">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tbody>
			<tr>
				<td width="17" valign="top"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif">
					<img src="<?php echo base_url().'style/' ?>images/left-top.gif"
					width="17" height="26">
				</td>
				<td style="font-size: 12px" valign="middle"
					background="<?php echo base_url().'style/' ?>images/content-bg.gif">
					<b>您当前位置：</b>申请案例>>申请案例修改
				</td>
				<td width="17" valign="top"
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif">
					<img src="<?php echo base_url().'style/' ?>images/right-top.gif"
					width="17" height="26">
				</td>
			</tr>
			<tr>
				<td valign="middle"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif">&nbsp;</td>
				<td></td>
				<td
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif">&nbsp;</td>
			</tr>
			<tr>
				<td valign="middle"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif">&nbsp;</td>
				<td valign="top" bgcolor="#F7F8F9">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">

						
							<tr>
								<td colspan="4">
								<form action="<?php echo site_url('apply/appEvaluation/editArticle') ?>" class="jqtransform" method="POST" enctype="multipart/form-data">
									<table class="form_table pt15 pb15" width="100%" border="0"
										cellpadding="0" cellspacing="0">
										
										<tr>
											<td class="td_right fs">文章标题：</td>
											<td class="">
											<input type="hidden" name="id" value="<?php echo $evaluation[0]['id'] ?>"/>
											<input type="text" name="eva_title"
												class="input-text lh30" size="40" readonly="true"
												value="<?php echo $evaluation[0]['username']." 申请留学 ".$evaluation[0]['outcountry']?>" />							
											</td>
									    </tr>
									    
										<tr>
											<td class="td_right fs">留学国家：</td>
											<td class="">

											<input type="text" name="outcountry" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['outcountry'] ?>" />
											</td>
											<td></td>	
										</tr>
										
										<tr>
											<td class="td_right fs">留学专业：</td>
											<td class="">

											<input type="text" name="outmajor" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['outmajor'] ?>" />
											</td>
											<td></td>	
										</tr>
										
										<tr>
											<td class="td_right fs">备选国家：</td>
											<td class="">

											<input type="text" name="altcountry" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['altcountry'] ?>" />
											</td>
											<td></td>	
										</tr>
										
										<tr>
											<td class="td_right fs">出国时间：</td>
											<td class="">

											<input type="text" name="outtime" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['outtime'] ?>" />
											</td>
											<td></td>	
										</tr>
										
										<tr>
											<td class="td_right fs">攻读学位：</td>
											<td class="">

											<input type="text" name="outdegree" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['outdegree'] ?>" />
											</td>
											<td></td>	
										</tr>
												
										<tr>
											<td class="td_right fs">就读院校：</td>
											<td class="">

											<input type="text" name="incollege" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['incollege'] ?>" />
											</td>
											<td></td>	
										</tr>
										
										<tr>
											<td class="td_right fs">就读专业：</td>
											<td class="">

											<input type="text" name="inmajor" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['inmajor'] ?>" />
											</td>
											<td></td>	
										</tr>
										
										<tr>
											<td class="td_right fs">学校类型：</td>
											<td class="">

											<input type="text" name="ctype" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['ctype'] ?>" />
											</td>
											<td></td>	
										</tr>
										
										<tr>
											<td class="td_right fs">平均成绩：</td>
											<td class="">

											<input type="text" name="gpa" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['gpa'] ?>" />
											</td>
											<td></td>	
										</tr>
										
										<tr>
											<td class="td_right fs">外语成绩：</td>
											<td class="">

											<input type="text" name="egpa" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['egpa'] ?>" />
											</td>
											<td></td>	
										</tr>
										
										<tr>
											<td class="td_right fs">姓名：</td>
											<td class="">

											<input type="text" name="username" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['username'] ?>" />
											</td>
											<td></td>	
										</tr>
										
										<tr>
											<td class="td_right fs">性别：</td>
											<td class="">

											<input type="text" name="gender" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['gender'] ?>" />
											</td>
											<td></td>	
										</tr>
										
										<tr>
											<td class="td_right fs">最高学历：</td>
											<td class="">

											<input type="text" name="maxdegree" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['maxdegree'] ?>" />
											</td>
											<td></td>	
										</tr>
										
										<tr>
											<td class="td_right fs">Email地址：</td>
											<td class="">

											<input type="text" name="email" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['email'] ?>" />
											</td>
											<td></td>	
										</tr>
										
										<tr>
											<td class="td_right fs">手机号码：</td>
											<td class="">

											<input type="text" name="mobile" readonly="true"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['mobile'] ?>" />
											</td>
											<td></td>	
										</tr>
										 
										<tr>
									       <td class="td_right fs">审核结果：</td>
									       <td class="fs">
									       <input type="radio" name="status" value="1" <?php if(0==$evaluation[0]['status'] || 1==$evaluation[0]['status']) echo set_radio('status','1', TRUE); else echo set_radio('status','1')?>/> 审核中 &nbsp;&nbsp;
									       <input type="radio" name="status" value="2" <?php if(2==$evaluation[0]['status']) echo set_radio('status','2', TRUE); else echo set_radio('status','2')?>/> 已邮箱通知&nbsp;&nbsp;
									       <input type="radio" name="status" value="3" <?php if(3==$evaluation[0]['status']) echo set_radio('status','3', TRUE); else echo set_radio('status','3')?>/> 已电话通知&nbsp;&nbsp;
									       </td>
								       </tr>
								       
										<tr>
											<td class="td_right fs">审核人：</td>
											<td class="">
											<input type="text" name="author"
												class="input-text lh30" size="40" value="<?php echo $evaluation[0]['author'] ?>" />
											<?php echo form_error('author','<span>','</span>')?>
											</td>											
										</tr>
								   <tr>
									<td class="td_right">&nbsp;</td>
									<td class="">
									
									<input type="submit" name="button" class="btn btn82 btn_save2 fs" value="保存"> 
									<a href="<?php echo site_url().'/apply/appEvaluation/appEvaluationList'; ?>">
									<input type="button" name="button" class="btn btn82 btn_config fs" value="返回">
									</a>
									</td>
								</tr>
								
								
									</table>
									</form>
								</td>
							</tr>


						
					</table>
				</td>
				<td
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif">&nbsp;</td>
			</tr>
			<tr>
				<td valign="middle"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif">&nbsp;</td>
				<td valign="top" bgcolor="#F7F8F9"></td>
				<td
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif">&nbsp;</td>
			</tr>
			<tr>
				<td valign="bottom"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif"><img
					src="<?php echo base_url().'style/' ?>images/left_buttom.gif"
					width="17" height="17"></td>
				<td
					background="<?php echo base_url().'style/' ?>images/buttom_bgs.gif">
				</td>
				<td valign="bottom"
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif"><img
					src="<?php echo base_url().'style/' ?>images/right_buttom.gif"
					width="16" height="17"></td>
			</tr>
		</tbody>
	</table>

</body>
