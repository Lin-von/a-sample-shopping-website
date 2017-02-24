<!DOCTYPE html>
<?php
$name=$_GET['name'];
$price = $_GET['price'];
?>
<html lang="en">
    <head>
    <title>Single</title>
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
        <!-- //FlexSlider-->
        <script>
            function showremain(str,str1)
            {
                if (str=="")
                {
                    document.getElementById("count").innerHTML="";
                    return;
                }
                if (window.XMLHttpRequest)
                {
                    // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {
                    // IE6, IE5 浏览器执行代码
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        document.getElementById("count").innerHTML=xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","getcount.php?q="+str+"&name="+str1,true);
                xmlhttp.send();
            }
            
            function incart() {

                var size=document.getElementById("size-c").value;
                var qty=document.getElementById("qty-c").value;
                if(size=="请选择尺码")
                {
                    alert("请选择尺码");
                    return;
                }
                var count=document.getElementById("count").innerHTML;
                if(count=="0")
                {
                    alert("该商品已售罄");
                    return;
                }
                if(Number(count)-Number(qty)<0)
                {
                    alert("超过购买数量上限");
                    return;
                }
                window.location.href="incart.php?name=<?php echo $name?>&size="+size+"&qty="+qty;
            }
            function buynow() {

                var size=document.getElementById("size-c").value;
                var qty=document.getElementById("qty-c").value;
                if(size=="请选择尺码")
                {
                    alert("请选择尺码");
                    return;
                }
                var count=document.getElementById("count").innerHTML;
                if(count=="0")
                {
                    alert("该商品已售罄");
                    return;
                }
                if(Number(count)-Number(qty)<0)
                {
                    alert("超过购买数量上限");
                    return;
                }

                window.location.href="buy.php?price=<?php echo $price;?>&name=<?php echo $name?>&size="+size+"&qty="+qty;
            }
        </script>
    </head>
    <?php session_start();?>
    <body>
        <div class="header">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.php">FOOTBALL SHOES</a>
                    </div>
                    <div class="login-bars">
                        <?php if(!isset($_SESSION['user'])) {?>
                            <a class="btn btn-default log-bar" href="register.php" role="button">注册</a>
                            <a class="btn btn-default log-bar" href="signup.php" role="button">登录</a>
                        <?php }
                        else {?>

                            <a style="background-color: gainsboro;" class="btn btn-default log-bar" href="back/index.php" role="button">个人管理中心</a>
                            <a style="background-color: gainsboro;" class="btn btn-default log-bar" href="logout.php" role="button">注销</a>
                            <p style="font-family: 微软雅黑;font-size: 1.5em;color: gainsboro;float: left"><?php echo $_SESSION['user'];?> &nbsp;</p>
                            <div class="cart box_1">

                                <p><a href="checkout.php" class="simpleCart_empty">查看购物车</a></p>
                                <div class="clearfix"> </div>
                            </div>
                        <?php }?>
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

                        <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav nav-font">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">商品<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="products.php">足球鞋</a></li>

                                        <li class="divider"></li>
                                        <li><a href="#">配件</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">品牌<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="products.php?brand=adidas">Adidas</a></li>
                                        <li><a href="products.php?brand=nike">Nike</a></li>
                                        <li><a href="products.php?brand=puma">Puma</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">男子<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="products.php">足球鞋</a></li>

                                        <li class="divider"></li>
                                        <li><a href="#">配件</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">女子<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="products.php">足球鞋</a></li>

                                        <li class="divider"></li>
                                        <li><a href="#">配件</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">儿童<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="products.php">足球鞋</a></li>

                                        <li class="divider"></li>
                                        <li><a href="#">配件</a></li>

                                    </ul>
                                </li>


                                <div class="clearfix"></div>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
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
                    <li><a href="products.php">商品</a></li>
                    <li class="active">商品详情</li>
                </ol>
            </div>
        </div>
        <?php

        header("Content-Type: text/html;charset=utf-8");
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "maindb_10312";

        // 创建连接
        $conn = new mysqli($servername, $username, $password, $dbname);
        // 检测连接
        if ($conn->connect_error) {
            die("连接失败: " . $conn->connect_error);
        }
        mysqli_set_charset ($conn,utf8);

        $sql = "SELECT * FROM item_10312 WHERE NAME = '$name'";

        $result = $conn->query($sql);
        //$row = $result->fetch_assoc();

        $conn->close();
        ?>
        <div class="showcase-grid">
            <div class="container">
                <div class="col-md-8 showcase">
                    <div  class="flexslider">
                          <ul class="slides">
                            <li data-thumb="images/<?php echo $name;?>1.png">
                                <div class="thumb-image"> <img src="images/<?php echo $name;?>1.png" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="images/<?php echo $name;?>2.png">
                                 <div class="thumb-image"> <img src="images/<?php echo $name;?>2.png" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="images/<?php echo $name;?>3.png">
                               <div class="thumb-image"> <img src="images/<?php echo $name;?>3.png" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="images/<?php echo $name;?>4.png">
                               <div class="thumb-image"> <img src="images/<?php echo $name;?>4.png" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                          </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 showcase">
                    <div class="showcase-rt-top">
                        <div class="pull-left shoe-name">
                            <h3><?php echo $name;?></h3>
                            <p>男子人造草地足球鞋</p>
                            <h4>￥<?php echo $price;?></h4>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <hr class="featurette-divider">
                    <div class="shocase-rt-bot">
                        <from action="buy.php">
                        <div class="float-qty-chart">
                        <ul>
                            <li class="qty">
                                <h3>尺码</h3>

                                <select id="size-c" class="form-control siz-chrt" onchange="showremain(this.value,'<?php echo $name;?>')">
                                    <option disabled selected>请选择尺码</option>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        // 输出每行数据
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='".$row["size"]."'>".$row["size"]."</option>";
                                        }
                                    }
                                    ?>

                                </select>
                            </li>
                            <li class="qty">

                                    <p>
                                        <div style="float:left;width:50px;margin: 35px 0px 0px 30px;height: 28px;font-family: 黑体;font-size: 1.2em;">
                                                库存:
                                        </div>
                                        <div style="float:left;width:50px;margin: 35px 0px 0px 10px;height: 28px;font-family: 黑体;font-size: 1.2em;"id="count">
                                        </div>
                                    </p>

                            </li>
                        </ul>

                            <ul>
                                <li  class="qty">
                                    <h4>数量</h4>
                                    <select id="qty-c" class="form-control qnty-chrt">
                                        <option selected value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                </li>
                            </ul>
                        <div class="clearfix"></div>
                        </div>
                        <ul>
                            <li class="ad-2-crt simpleCart_shelfItem">
                                <a class="btn item_add" href="#" role="button" onclick="incart()">添加到购物车</a>
                                <a class="btn" href="#" role="button" onclick="buynow()">立即购买</a>
                            </li>
                        </ul>
                        </from>
                    </div>
                    <div class="showcase-last">
                        <h3>product details</h3>
                        <ul>
                            <li>男子人造草地足球鞋具备出色的稳定性和非凡触球感。AG-PRO 底盘搭配抗热层，增强舒适感。</li>
                            <li>产品为参照，实物的具体信息若与参照物和网站产品图片有出入，请以实物为准。如有其它疑问，请联系我们。</li>
                        </ul>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="specifications">
            <div class="container">
              <h3>商品细节</h3>
                <div class="detai-tabs">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills tab-nike" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">材质</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">科技</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">其他细节</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                    <p>轻盈柔软的双重密度尼龙外底，舒适缓震<br>
                        鞋垫配置打孔式设计，营造出众透气性<br>
                        匠心排布的注入式混合鞋钉塑就出色抓地力，助你自由驰聘</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                    <p>Nike Flyknit 是一种由聚酯纱线制作而成的鞋面的技术，它不仅具有轻量、弹性和耐磨等特点，同时也通过线与线自然交错形成的孔眼，增加了鞋面的透气性。基于 Flyknit 鞋面材质和工艺的特殊性的原因，左右两只鞋所呈现的花纹和颜色有可能无法完全一致。</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        轻质人造草地底盘配备轻薄的二级鞋钉，可增强鞋缘抓地力并缓解前掌压力；而鞋跟处嵌入的分压衬垫则可在运动时均匀分散鞋钉压力。此外还搭载中空式鞋钉和缓震鞋跟，可有效增强支撑；额外的弯曲凹槽有助于在比赛中快速转向；而微型抓地凸起则可显著提升侧向支撑力。
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="you-might-like">
            <div class="container">
                <h3 class="you-might">Products You May Like</h3>
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                     <!-- normal -->
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                    <div class="img"><img src="images/grid4.jpg" alt="/" class="img-responsive gri-wid"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 01</h3>
                                </div>
                                <div class="pull-right styl-price">
                                    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                        </div>
                    <!-- end normal -->
                    <div class="quick-view">
                        <a href="single.php">Quick view</a>
                    </div>
                </div>
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                    <!-- normal -->
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                    <div class="img"><img src="images/grid6.jpg" alt="/" class="img-responsive gri-wid"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 01</h3>
                                </div>
                                <div class="pull-right styl-price">
    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                        </div>
                    <!-- end normal -->
                    <div class="quick-view">
                        <a href="single.php">Quick view</a>
                    </div>
                </div>
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                    <!-- normal -->
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                    <div class="img"><img src="images/grid3.jpg" alt="/" class="img-responsive gri-wid"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 01</h3>
                                </div>
                                <div class="pull-right styl-price">
    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                        </div>
                    <!-- end normal -->
                    <div class="quick-view">
                        <a href="single.php">Quick view</a>
                    </div>
                </div>
                <div class="clearfix"></div>
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
    