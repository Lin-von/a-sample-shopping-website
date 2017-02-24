<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php session_start();?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <title>Crown - premium responsive admin template for backend systems</title>
    <link href="css/main.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="js/jquery.min.js"></script>

    <script type="text/javascript" src="js/plugins/spinner/ui.spinner.js"></script>
    <script type="text/javascript" src="js/plugins/spinner/jquery.mousewheel.js"></script>

    <script type="text/javascript" src="js/jquery-ui.min.js"></script>

    <script type="text/javascript" src="js/plugins/charts/excanvas.min.js"></script>
    <script type="text/javascript" src="js/plugins/charts/jquery.flot.js"></script>
    <script type="text/javascript" src="js/plugins/charts/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="js/plugins/charts/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="js/plugins/charts/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="js/plugins/charts/jquery.sparkline.min.js"></script>

    <script type="text/javascript" src="js/plugins/forms/uniform.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.cleditor.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.validationEngine-en.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="js/plugins/forms/autogrowtextarea.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.dualListBox.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.inputlimiter.min.js"></script>
    <script type="text/javascript" src="js/plugins/forms/chosen.jquery.min.js"></script>

    <script type="text/javascript" src="js/plugins/wizard/jquery.form.js"></script>
    <script type="text/javascript" src="js/plugins/wizard/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/wizard/jquery.form.wizard.js"></script>

    <script type="text/javascript" src="js/plugins/uploader/plupload.js"></script>
    <script type="text/javascript" src="js/plugins/uploader/plupload.html5.js"></script>
    <script type="text/javascript" src="js/plugins/uploader/plupload.html4.js"></script>
    <script type="text/javascript" src="js/plugins/uploader/jquery.plupload.queue.js"></script>

    <script type="text/javascript" src="js/plugins/tables/datatable.js"></script>
    <script type="text/javascript" src="js/plugins/tables/tablesort.min.js"></script>
    <script type="text/javascript" src="js/plugins/tables/resizable.min.js"></script>

    <script type="text/javascript" src="js/plugins/ui/jquery.tipsy.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.collapsible.min.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.progress.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.timeentry.min.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.colorpicker.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.jgrowl.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.breadcrumbs.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.sourcerer.js"></script>

    <script type="text/javascript" src="js/plugins/calendar.min.js"></script>
    <script type="text/javascript" src="js/plugins/elfinder.min.js"></script>

    <script type="text/javascript" src="js/custom.js"></script>

    <script type="text/javascript" src="js/charts/chart.js"></script>

    <!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>

<body>

<div  id="leftSide">
    <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" /></a></div>

    <div class="sidebarSep mt0"></div>

    <!-- Search widget -->

    <div class="sideProfile">
        <a href="#" title="" class="profileFace"><img src="images/user.png" alt="" /></a>
        <span>欢迎您 <strong> <?php echo $_SESSION['user'];?> </strong></span>
        <span>您的职位： 仓库管理员</span>
        <div class="clear"></div>

    </div>

    <div class="sidebarSep"></div>
    <div class="iconsGroup">
        <ul>
            <li><a href="accm1.php" title="" class="dUsers"></a></li>
            <li><a href="cageinfo.php" title="" class="dMessages"></a></li>
            <li><a href="index2.php" title="" class="dMoney"></a></li>
        </ul>
        <div class="clear"></div>
    </div>
    <div class="sidebarSep"></div>
    <!-- General balance widget -->




    <!-- Left navigation -->
    <ul id="menu" class="nav">
        <li class="dash"><a href="index.php" title="" ><span>主页</span></a></li>
        <li class="typo"><a href="inmang.php" title="" ><span>入库管理</span></a></li>
        <li class="charts"><a href="outmang.php" title="" ><span>出库管理</span></a></li>
        <li class="forms"><a href="inout.php" title="" class="active"><span>盘盈盘亏</span></a></li>
        <li class="ui"><a href="cageinfo.php" title=""><span>库存信息</span></a></li>

    </ul>
</div>


<!-- Right side -->
<div style="height: 1600px;" id="rightSide">
    <?php session_start();?>
    <!-- Top fixed navigation -->
    <div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="images/userPic.png" alt="" /></a><span>欢迎您  <?php echo $_SESSION['user'];?>!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="index.php" title=""><img src="images/icons/topnav/profile.png" alt="" /><span>个人中心</span></a></li>

                    <li><a href="index.php" title=""><img src="images/icons/topnav/settings.png" alt="" /><span>仓库管理</span></a></li>
                    <li><a href="../logout.php" title=""><img src="images/icons/topnav/logout.png" alt="" /><span>注销</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!-- Responsive header -->


    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5><?php echo $_SESSION['user'];?></h5>
                <span>您可以在这里管理仓库</span>
            </div>
            <div class="middleNav">
                <ul>
                    <li class="mUser"><a href="accm1.php" title="账户管理"class="tipN"><span class="users"></span></a></li>
                    <li class="mMessages"><a href="cageinfo.php" title="库存信息" class="tipN"><span class="messages"></span></a>

                    </li>

                    <li class="mOrders"><a href="index2.php" title="仓库管理"class="tipN"><span class="orders"></span></a>

                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="line"></div>

    <!-- Page statistics area -->
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
    $uname = $_SESSION['user'];


    $sql = "SELECT * FROM out_main_10312 ORDER BY date desc";
    $result = $conn->query($sql);
    //$row = $result->fetch_assoc();
    $conn->close();
    ?>



    <!-- Main content wrapper -->
    <div class="wrapper">

        <div class="widget">
            <div class="oneTwo">
                <form id="usualValidate" class="form" method="post" action="inoutcage.php?tip=1"">
                <fieldset>
                    <div class="widget">
                        <div class="title"><img src="images/icons/dark/alert.png" alt="" class="titleIcon" /><h6>添加盘盈信息</h6></div>

                        <div class="formRow dnone">
                            <label style="width: 10%;">商品信息:</label>

                            <span style="width: 10%; margin-left:5px; " class="oneFour"><input name="gname" type="text" placeholder="商品名称" /></span>
                            <span style="width: 10%; margin-left:25px; " class="oneFour"><input name="gbrand"type="text" placeholder="品牌" /></span>
                            <span style="width: 10%; margin-left:25px; " class="oneFour"><input name="gseries"type="text" placeholder="系列" /></span>
                            <span style="width: 10%; margin-left:25px; " class="oneFour"><input name="gsize"type="text" placeholder="尺码" /></span>
                            <span style="width: 10%; margin-left:25px; " class="oneFour"><input name="gprice"type="text" placeholder="单价" /></span>
                            <span style="width: 10%; margin-left:25px; " class="oneFour"><input name="gqty"type="text" placeholder="数量" /></span>


                            <div class="clear"></div>
                        </div>




                        <div class="formSubmit"><input type="submit" value="完成" class="redB" /></div>
                        <div class="clear"></div>
                    </div>

                </fieldset>
                </form>
            </div>

        </div>

        <div class="oneTwo">
            <form id="usualValidate" class="form" method="post" action="inoutcage.php?tip=2"">
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/alert.png" alt="" class="titleIcon" /><h6>添加盘亏信息</h6></div>

                        <div class="formRow dnone">
                            <label style="width: 10%;">商品信息:</label>

                            <span style="width: 10%; margin-left:5px; " class="oneFour"><input name="gname" type="text" placeholder="商品名称" /></span>
                            <span style="width: 10%; margin-left:25px; " class="oneFour"><input name="gbrand"type="text" placeholder="品牌" /></span>
                            <span style="width: 10%; margin-left:25px; " class="oneFour"><input name="gseries"type="text" placeholder="系列" /></span>
                            <span style="width: 10%; margin-left:25px; " class="oneFour"><input name="gsize"type="text" placeholder="尺码" /></span>
                            <span style="width: 10%; margin-left:25px; " class="oneFour"><input name="gprice"type="text" placeholder="单价" /></span>
                            <span style="width: 10%; margin-left:25px; " class="oneFour"><input name="gqty"type="text" placeholder="数量" /></span>


                            <div class="clear"></div>
                        </div>



                    <div class="formSubmit"><input type="submit" value="完成" class="redB" /></div>
                    <div class="clear"></div>
                </div>

            </fieldset>
            </form>
        </div>

    </div>

    <!-- Footer line -->


</div>

<div class="clear"></div>

</body>
</html>