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
								<form action="<?php echo site_url('case/appCase/editArticle') ?>" class="jqtransform" method="POST" enctype="multipart/form-data">
									<table class="form_table pt15 pb15" width="100%" border="0"
										cellpadding="0" cellspacing="0">
										
										<tr>
											<td class="td_right fs">案例标题：</td>
											<td class="">
											<input type="hidden" name="id" value="<?php echo $case[0]['cid'] ?>"/>
											<input type="text" name="case_title"
												class="input-text lh30" size="40"
												value="<?php echo $case[0]['case_title']?>" />
												
												<?php echo form_error('case_title','<span>','</span>')?>
												
											</td>
									    </tr>
									    
										<tr>
											<td class="td_right fs">申请学校：</td>
											<td class="">
											
											<input type="text" name="academy_name"
												class="input-text lh30" size="40" value="<?php echo $case[0]['academy'] ?>" />
												
												<?php echo form_error('academy_name','<span>','</span>')?>
												
											</td>
											<td></td>
											
										</tr>
										
										<tr>
									       <td class="td_right fs">所属国家：</td>
									       <td class="fs">
									       <input type="radio" name="country" value="0" <?php if(0==$case[0]['country']) echo set_radio('country','0', TRUE); else echo set_radio('country','0')?>/> 美国 &nbsp;&nbsp;
									       <input type="radio" name="country" value="1" <?php if(1==$case[0]['country']) echo set_radio('country','1', TRUE); else echo set_radio('country','1')?>/> 英国&nbsp;&nbsp;
									       <input type="radio" name="country" value="2" <?php if(2==$case[0]['country']) echo set_radio('country','2', TRUE); else echo set_radio('country','2')?>/> 香港&nbsp;&nbsp;
									       <input type="radio" name="country" value="3" <?php if(3==$case[0]['country']) echo set_radio('country','3', TRUE); else echo set_radio('country','3')?>/> 澳洲&nbsp;&nbsp;
									       <input type="radio" name="country" value="4" <?php if(4==$case[0]['country']) echo set_radio('country','4', TRUE); else echo set_radio('country','4')?>/> 新加坡&nbsp;&nbsp;
									       </td>
								       </tr>
								       
										<tr>
											<td class="td_right fs">发布人：</td>
											<td class="">
											<input type="text" name="author"
												class="input-text lh30" size="40" value="<?php echo $case[0]['author'] ?>" />
											<?php echo form_error('author','<span>','</span>')?>
											</td>											
										</tr>									
										
								       <tr>
									       <td class="td_right fs">学校缩略图：</td>
									       <td class="">
									       <input type="file" name="thumb"/>
									       </td>
								       </tr>
										<tr>
											<td class="td_right fs">显示位置：</td>
											<td class=""><input type="text" name="position" placeholder="比如1,2,3..."
												class="input-text lh30" size="40" value="<?php echo $case[0]['position'] ?>"></td>
											
										</tr>
										
								        <tr>
											<td class="td_right fs">案例正文：</td>
											<td class=""><textarea name="case_content" id="content" cols="30" rows="10"
												class="textarea"><?php echo $case[0]['case_content']?></textarea>
												<?php echo form_error('case_content','<span>','</span>')?>
											</td>
										</tr>
								
								   <tr>
									<td class="td_right">&nbsp;</td>
									<td class="">
									
									<input type="submit" name="button" class="btn btn82 btn_save2 fs" value="保存"> 
										
									<input type="reset" name="button" class="btn btn82 btn_res fs" value="重置">
									<a href="<?php echo site_url().'/case/appCase/appCaseList'; ?>">
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
