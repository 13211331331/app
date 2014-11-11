<?php if (!defined('THINK_PATH')) exit();?>

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
                     <li><a id="home_link" accesskey="h" href="<?php echo U('Index/index');?>">← Back home</a></li>
                    <li class="vr"></li>
                    <li><a accesskey="l" href="<?php echo U('Login/index');?>">Sign in</a></li>
                    <li><a href="<?php echo U('Login/signup');?>">Join Ideat!</a></li>
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
    <div class="row-fluid">
        <div class="span6 border-radius6 border offset2">
            <div class="row-fluid">
                <form class="form-inline center" action="" method="post">
                    <div class="span9 offset2">
                    <div class="title">
                        <input type="hidden" name="token" value="<?php echo ($token); ?>" />
                        <h3>Sign in</h3>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input-email"></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input  value="<?php echo ($username); ?>" name="usernameoremail" class="email-input input-large" type="text" id="input-email" placeholder="Username or Email">
                             </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input-password"></label>
                        <div class="controls">
                            <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span>
                            <input  name="password" class="input-large" type="password" id="input-password" placeholder="Password">
                            </div>
                            <p class="help-text-inline"><a href="">Forgot?</a></p>
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
                            </div>
                        </div><?php endif; ?>
                    <div class="control-group">
                        <label class="control-label hide" for="btn-submit"></label>
                        <div class="controls">
                            <button type="submit" class="submit btn btn-large"> Sign in </button>
                            <label class="checkbox remember offset1">
                                <input type="checkbox"> Remember me
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
        <div class="span4 block well well-small border-radius6 border">
            <div class="row-fluid">
                    <div class="row-fluid inner-center">
                        <h5></h5>
                    </div> 
                    <div class="row-fluid inner-center">
                        <a class="btn btn-large" href="<?php echo U('Login/signup');?>">Create Your Account</a>
                    </div> 
                    <div class="row-fluid">
                        <br />
                    </div> 
            </div>
            <div class="row-fluid inner-center">
               <script id='denglu_login_js' type='text/javascript' charset='utf-8'></script>
<script type="text/javascript" charset="utf-8">
   
    $(function() {
        var _dl_time = new Date().getTime();
        var _dl_login = document.getElementById('denglu_login_js');
        _dl_login.id = _dl_login.id + '_' + _dl_time;
        _dl_login.src = 'http://open.denglu.cc/connect/logincode?appid=52707denh7xFHpBYtEUEhgnOk6zOi3&v=1.0.2&widget=1&styletype=1&size=250_181&asyn=true&time=' + _dl_time;
    })();
</script> 
               <script id='denglu_login_js' type='text/javascript' charset='utf-8'></script>
            </div>
            <p class="mobile-helper" style="margin:0;line-height: 5px;">&nbsp;</p>
        </div>
    </div>
</div>
</div>

</body>
</html>