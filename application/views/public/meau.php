<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理页面</title>

<script src="<?php echo base_url().'style/' ?>js/prototype.lite.js" type="text/javascript"></script>
<script src="<?php echo base_url().'style/' ?>js/moo.fx.js" type="text/javascript"></script>
<script src="<?php echo base_url().'style/' ?>js/moo.fx.pack.js" type="text/javascript"></script>
<link href="<?php echo base_url().'style/' ?>css/left.css" rel="stylesheet" type="text/css">
<style>
body {
	font: 12px Arial, Helvetica, sans-serif;
	color: #000;
	background-color: #EEF2FB;
	margin: 0px;
}

</style>
</head>

<body>
<table width="100%" height="280" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEF2FB">
  <tr>
    <td width="182" valign="top"><div id="container">
      <h1 class="type"><a href="javascript:void(0)">留学申请管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?php echo base_url().'style/' ?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?php echo site_url().'/apply/appTip/appTipList'; ?>" target="main">留学资讯</a></li>
          <li><a href="<?php echo site_url().'/apply/appEvaluation/appEvaluationList'; ?>" target="main">留学评估</a></li>
          
          <li><a href="<?php echo site_url().'/apply/appCountry/appKcountry/usa'; ?>" target="main">美国留学</a></li>
          <li><a href="<?php echo site_url().'/apply/appCountry/appKcountry/uk'; ?>" target="main">英国留学</a></li>
          <li><a href="<?php echo site_url().'/apply/appCountry/appKcountry/hk'; ?>" target="main">香港留学</a></li>
          <li><a href="<?php echo site_url().'/apply/appCountry/appKcountry/aus'; ?>" target="main">澳洲留学</a></li>
          <li><a href="<?php echo site_url().'/apply/appCountry/appKcountry/singapore'; ?>" target="main">新加坡留学</a></li>   
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">文书写作管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?php echo base_url().'style/' ?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?php echo site_url().'/eassy/eassyExa/eassyExaList'; ?>" target="main">文书案例</a></li>
          <li><a href="<?php echo site_url().'/eassy/eassyTip/eassyTipList'; ?>" target="main">文书技巧</a></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">申请案例管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?php echo base_url().'style/' ?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
		  <li><a href="<?php echo site_url().'/apply/applyExa/applyExaList'; ?>" target="main">申请案例</a></li>
          <li><a href="http://www.mycodes.net" target="main">留学案例</a></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          
   
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">注册用户管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?php echo base_url().'style/' ?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          
          <li><a href="http://www.mycodes.net" target="main">留言管理</a></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>

        </ul>
      </div>
    </div>
        <h1 class="type"><a href="javascript:void(0)">系统参数管理</a></h1>
      <div class="content">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="<?php echo base_url().'style/' ?>images/menu_topline.gif" width="182" height="5" /></td>
            </tr>
          </table>
        <ul class="MM">
            <li><a href="http://www.mycodes.net" target="main">系统参数</a></li>
          <li><a href="<?php echo site_url().'/sysconfig/sysconfig/modifyPass'; ?>" target="main">修改密码</a></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      </div>
        <script type="text/javascript">
		var contents = document.getElementsByClassName('content');
		var toggles = document.getElementsByClassName('type');
	
		var myAccordion = new fx.Accordion(
			toggles, contents, {opacity: true, duration: 400}
		);
		myAccordion.showThisHideOpen(contents[0]);
	</script>
        </td>
  </tr>
</table>
</body>
</html>
