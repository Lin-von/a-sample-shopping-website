<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Checkout</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
		<!--fonts-->
		<link href='https://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
		
		<!--fonts-->
		<!--bootstrap-->
			 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--coustom css-->
			<link href="css/style.css" rel="stylesheet" type="text/css"/>
        <!--shop-kart-js-->
        <script src="js/simpleCart.min.js"></script>
		<!--default-js-->
			<script src="js/jquery-2.1.4.min.js"></script>
		<!--bootstrap-js-->
			<script src="js/bootstrap.min.js"></script>
		<!--script-->
         <!-- FlexSlider -->
            <script src="js/imagezoom.js"></script>
              <script defer src="js/jquery.flexslider.js"></script>
            <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

            <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
            </script>

        <script type="text/javascript">
            $(document).ready(function(){
               // $("#username").focus();

                $("#name").blur(function(){
                    name= $("#name").val();
                    $.get("namecheck.php", { name:name } ,function(data){//判断数据库中是否存在此用户名 重点$.get,$.post t1.php在下面
                        if(data==1) {$("#showResult").html("可以使用"); }
                        else if(data==0) {$("#showResult").html("已注册的用户名");}
                        else  {$("#showResult").html("请输入用户名");}
                    });
                });


                $("#email").blur(function(){
                    name= $("#email").val();

                    var patten2= new RegExp(/^[0-9|A-z|_]{1,17}[@][0-9|A-z]{1,3}.(com)$/);
                    if(name=="") {$("#showemail").html("请输入邮箱地址");}
                    else if(patten2.test(name)){$("#showemail").html("格式正确");}
                    else {$("#showemail").html("请检查邮箱");}

                });

                $("#pwd").blur(function(){
                    name= $("#pwd").val();

                    var patten2= new RegExp(/^[0-9|A-z]{5,17}$/);
                    if(name=="") {$("#showpwd").html("请输入密码");}
                    else if(patten2.test(name)){$("#showpwd").html("格式正确");}
                    else {$("#showpwd").html("请检查密码");}

                });

                $("#rpwd").blur(function(){
                    pwd= $("#pwd").val();
                    rpwd = $("#rpwd").val();

                    if(pwd==rpwd)
                    {
                        if(pwd==""){$("#showrpwd").html("请输入密码");}
                        else {$("#showrpwd").html("正确");}
                    }
                    else {$("#showrpwd").html("两次密码输入不一致");}

                });

                $("#tel").blur(function(){
                    name= $("#tel").val();

                    var patten2= new RegExp(/^[1][0-9]{10}$/);
                    if(name=="") {$("#showtel").html("请输入电话号码");}
                    else if(patten2.test(name)){$("#showtel").html("格式正确");}
                    else {$("#showtel").html("请检查电话号码");}

                });



            });
            function subcheck(){
                flag=1;
                if($("#name").val()!="可以使用") flag=0;
                if($("#pwd").val()!="格式正确") flag=0;
                if($("#rpwd").val()!="正确") flag=0;
                if($("#email").val()!="格式正确") flag=0;
                if($("#tel").val()!="格式正确") flag=0;

                if(flag==0){
                    $("#show").html("请正确完成资料填写！");

                    return false;
                }
                else return true;

            }

            function len(s) {//若为汉字之类的字符则占两个
                var l = 0;
                var a = s.split("");
                for (var i=0;i<a.length;i++) {
                    if (a[i].charCodeAt(0)<299) {
                        l++;
                    } else {
                        l+=2;
                    }
                }
                return l;
            }

        </script>
        <!-- //FlexSlider-->
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.php">FOOTBALL SHOES</a>
                    </div>
                    <div class="login-bars">
                        <a class="btn btn-default log-bar" href="register.php" role="button">注册</a>
                        <a class="btn btn-default log-bar" href="signup.php" role="button">登录</a>

                    </div>
        <div class="clearfix"></div>
                </div>
                <!---menu-----bar--->
                <div class="header-botom">
                    <div class="content white">
                    <nav class="navbar navbar-default nav-menu" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!--/.navbar-header-->


                        <!--/.navbar-collapse-->
                        <div class="clearfix"></div>
                    </nav>
                    <!--/.navbar-->   
                        <div class="clearfix"></div>
                    </div>
                    <!--/.content--->
                </div>
                    <!--header-bottom-->
            </div>
        </div>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">首页</a></li>

                    <li class="active">注册</li>
                </ol>
            </div>
        </div>
        <!-- reg-form -->

	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3>注册</h3>
				<p>欢迎，请填写以下内容完成注册</p>

				 <form action="registerin.php" method="post" onsubmit="return subcheck()">
					<ul>
						<li class="text-info">用户名: </li>
						<li><input style="width: 300px;" type="text" name="uname" id="name" value=""><span id="showResult"></span></li>

					</ul>
					<ul>
						<li class="text-info">密码: </li>
						<li><input style="width: 300px;" type="password" id="pwd" name="upwd" placeholder="只能包含大小写字母和数字（5-17个字符）" value=""><span id="showpwd"></span></li>
					 </ul>
                     <ul>
                         <li class="text-info">请在输入一遍密码: </li>
                         <li><input style="width: 300px;" type="password" id="rpwd" name="upwd" value=""><span id="showrpwd"></span></li>
                     </ul>
                     <ul>
						<li class="text-info">Email: </li>
						<li><input style="width: 300px;" type="text" id="email" name="email" value=""><span id="showemail"></span></li>
					</ul>

					<ul>
						<li class="text-info">电话号码:</li>
						<li><input style="width: 300px;" type="text" id="tel" name="tel" value=""><span id="showtel"></span></li>
					</ul>						
					<input type="submit" value="注册"><span id="show"></span>

				</form>
			</div>
		</div>
	</div>
        <div class="footer-grid">
            <div class="container">
                <div class="col-md-2 re-ft-grd">
                    <h3>Categories</h3>
                    <ul class="categories">
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                        <li><a href="#">Formal</a></li>
                        <li><a href="#">Casuals</a></li>
                        <li><a href="#">Sports</a></li>
                    </ul>
                </div>
                <div class="col-md-2 re-ft-grd">
                    <h3>Short links</h3>
                    <ul class="shot-links">
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Terms & conditions</a></li>
                        <li><a href="contact.php">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-md-6 re-ft-grd">
                    <h3>Social</h3>
                    <ul class="social">
                        <li><a href="#" class="fb">facebook</a></li>
                        <li><a href="#" class="twt">twitter</a></li>
                        <li><a href="#" class="gpls">g+ plus</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="col-md-2 re-ft-grd">
                    <div class="bt-logo">
                        <div class="logo">
                            <a href="index.php" class="ft-log">N-AIR</a>
                        </div>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
            <div class="copy-rt">
                <div class="container">
            <p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.cssmoban.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
                </div>
            </div>
        </div>
    </body>
</html>