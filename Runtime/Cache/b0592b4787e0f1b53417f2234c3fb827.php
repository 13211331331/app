<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="Pragma" contect="no-cache" />
    <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
    <meta http-equiv="content-language" content="zh-CN" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ideat ideat.org">
    <meta name="copyright" content="© www.ideat.org" />
    <meta name="description" content="ideat、三月软件小组 专业从事软件开发的学生团队">
    <meta name="keywords" content="ideat、三月软件、三月软件工作室、三月软件小组、软件开发、Linux、Mysql、PHP" />
    <meta name="description" content="ideat 页面描述" />
    <meta name="keywords" content="ideat、页面关键字" />
    <meta name="robots" content="index,follow,archive" />
    <meta name="date" content="<?php echo date(DATE_ATOM); ?>" />
    
    <link rel='stylesheet' type='text/css' href="__PUBLIC__/include/bootstrap/css/bootstrap.min.css" />
    <link rel='stylesheet' type='text/css' href="__PUBLIC__/include/css/style.css" />
    <link rel='stylesheet' type='text/css' href="__PUBLIC__/include/code-prettify/prettify.css" />
    <link rel='stylesheet' type='text/css' href="__PUBLIC__/include/bootstrap-datetimepicker/css/datepicker.css" />
    <!--<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans' />-->
    <link rel="stylesheet" type='text/css' href="__PUBLIC__/include/tablesorter/css/theme.bootstrap.css">
    <link rel="stylesheet" type='text/css' href="__PUBLIC__/include/icheck/skins/flat/blue.css">
    <link rel="stylesheet" type='text/css' href="__PUBLIC__/include/bootstrap-modal/css/bootstrap-modal.css">


    <script type="text/javascript" src="__PUBLIC__/include/js/jquery.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/bootstrap/js/bootstrap-tooltip.js"></script>

    <script type="text/javascript" src="__PUBLIC__/include/bootstrap-modal/js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/bootstrap-modal/js/bootstrap-modalmanager.js"></script>

    <script type="text/javascript" src="__PUBLIC__/include/icheck/jquery.icheck.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/code-prettify/prettify.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/bootstrap-datetimepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/jquery-validation/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/jquery-validation/js/jquery.metadata.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/js/messages_zh.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/jquery-validation/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/js/jquery.prettydate.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/datatable/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/js/light-table-filter.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/tablesorter/js/jquery.tablesorter.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/tablesorter/js/jquery.tablesorter.widgets.js"></script>
    <script type="text/javascript" src="__PUBLIC__/include/js/comm.js"></script>
    
<style type="text/css">

</style>
<script type="text/javascript">

</script>
<!--[if lt IE 8]>
  <script type="text/javascript">
    
  </script> 
<![endif]-->
</head>
<body>
<div class="container">
<div class="wrapper">
    <div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="span10 center">
            <a class="btn btn-navbar" data-target="nav-collapse" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo ($home); ?>"><?php echo ($projectName); ?></a>
            <div class="nav-collapse">
                <ul class="nav">
                   
                </ul>
                <ul class="nav pull-right">
                     <li><a id="home_link" accesskey="h" href="<?php echo U('Index/index');?>">← 网站首页</a></li>
                    <li class="vr"></li>
                    <li><a accesskey="l" href="<?php echo U('Login/index');?>">登录</a></li>
                    <li><a href="<?php echo U('Login/signup');?>">注册</a></li>
                </ul>
                <form class="navbar-search pull-right" action="">
                    <!--<div class="input-prepend input-pend">
                       <input type="text" class="span2 search-query" placeholder="search">
                        <i class="add-on icon-search "></i>
                    </div>
                  -->
                </form>
            </div>
        </div>
    </div>
</div>

    <br>
    <br>
    <br>
    <div class="row-fluid">
        <div class="span6 border-radius6 border offset3">
            <div class="row-fluid">
                <form class="form-inline center" action="" method="post">
                    <div class="span9 offset2">
                    <div class="title">
                        <input type="hidden" name="token" value="<?php echo ($token); ?>" />
                        <h3>用户登录</h3>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input-email"></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input  value="<?php echo ($username); ?>" name="usernameoremail" class="email-input input-large" type="text" id="input-email" placeholder="请输入用户名或邮箱">
                             </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input-password"></label>
                        <div class="controls">
                            <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span>
                            <input  name="password" class="input-large" type="password" id="input-password" placeholder="请输入密码">
                            </div>
                            <p class="help-text-inline"><a href="">忘记密码?</a></p>
                        </div>
                    </div>
                    <?php if(($errors) > "3"): ?><div class="control-group">
                            <div class="controls">
                                <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'white'
 };
 </script>
<!--
<script type="text/javascript"
 src="http://www.google.com/recaptcha/api/challenge?k=6LdPzNcSAAAAAD5xZltr8TYCO5i9T5hoJ6FZnWij">
</script>
<noscript>
 <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LdPzNcSAAAAAD5xZltr8TYCO5i9T5hoJ6FZnWij"
     height="300" width="500" frameborder="0"></iframe><br>
 <textarea name="recaptcha_challenge_field" rows="3" cols="40">
 </textarea>
 <input type="hidden" name="recaptcha_response_field"
     value="manual_challenge">
</noscript>
-->
<?php echo ($recaptcha); ?>
                                <img src='Login:recaptcha' />
                            </div>
                        </div><?php endif; ?>
                    <div class="control-group">
                        <label class="control-label hide" for="btn-submit"></label>
                        <div class="controls">
                            <button type="submit" class="submit btn btn-large"> 登录 </button>
                            <label class="checkbox remember offset1">
                                <input type="checkbox"> 记住密码
                            </label>
                            
                        </div>
                    </div>
                    </div>
                </form>
            </div>
            <div class="mobile center">
                <p class="mobile-helper">
                  Welcome to <?php echo ($projectName); ?>. Have ideas in you mind? 
                  <a href="<?php echo U('Login/signup');?>">Join us now! »</a>
                </p>
            </div> 
        </div>
    </div>
</div>
</div>
<div id="alert" class="row-fluid">
    <div class="center alert message fade in hide">
        <a class="dismiss close" data-dismiss="alert">×</a>
        <label></label>
    </div>
</div>
<?php if(!empty($msg)): ?><script type="text/javascript">
		$(function(){
			alert(<?php echo '"'.$msg.'"';$msg=null; ?>);
		})
	</script><?php endif; ?>

</body>
</html>