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

<!-- Left side content -->
<div id="leftSide">
    <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" /></a></div>

    <div class="sidebarSep mt0"></div>

    <!-- Search widget -->




    <!-- General balance widget -->
    <div class="genBalance">
        <a href="#" title="" class="amount">
            <span>General balance:</span>
            <span class="balanceAmount">$10,900.36</span>
        </a>
        <a href="#" title="" class="amChanges">
            <strong class="sPositive">+0.6%</strong>
        </a>
    </div>

    <!-- Next update progress widget -->
    <div class="nextUpdate">
        <ul>
            <li>您是LV<?php echo $_SESSION['level'];?>用户 距升级还有:</li>
            <li>23 hrs 14 min</li>
        </ul>
        <div class="pWrapper"><div class="progressG" title="78%"></div></div>
    </div>

    <div class="sidebarSep"></div>

    <!-- Left navigation -->
    <ul id="menu" class="nav">
        <li class="dash"><a href="index.php" title="" class="active"><span>主页</span></a></li>

        <li class="files"><a href="purchaser.php" title=""><span>我购买的商品</span></a></li>
        <li class="dash"><a href="accm.php" title=""  ><span>账户管理</span></a>  </li>
    </ul>
</div>


<!-- Right side -->
<div style="height: 800px;" id="rightSide">

    <!-- Top fixed navigation -->
    <div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="images/userPic.png" alt="" /></a><span>欢迎您  <?php echo $_SESSION['user'];?>!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="back/index.php" title=""><img src="images/icons/topnav/profile.png" alt="" /><span>个人中心</span></a></li>

                    <li><a href="../index.php" title=""><img src="images/icons/topnav/settings.png" alt="" /><span>返回商城</span></a></li>
                    <li><a href="../logout.php" title=""><img src="images/icons/topnav/logout.png" alt="" /><span>注销</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!-- Responsive header -->
    <div class="resp">
        <div class="respHead">
            <a href="index.php" title=""><img src="images/loginLogo.png" alt="" /></a>
        </div>

        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="images/icons/light/home.png" alt="" />Dashboard</span>
            <ul class="smallDropdown">
                <li><a href="index.php" title=""><img src="images/icons/light/home.png" alt="" />Dashboard</a></li>
                <li><a href="charts.html" title=""><img src="images/icons/light/stats.png" alt="" />Statistics and charts</a></li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/pencil.png" alt="" />Forms stuff<strong>4</strong></a>
                    <ul>
                        <li><a href="forms.html" title="">Form elements</a></li>
                        <li><a href="form_validation.html" title="">Validation</a></li>
                        <li><a href="form_editor.html" title="">WYSIWYG and file uploader</a></li>
                        <li class="last"><a href="accm.php" title="">Wizards</a></li>
                    </ul>
                </li>
                <li><a href="ui_elements.html" title=""><img src="images/icons/light/users.png" alt="" />Interface elements</a></li>
                <li><a href="tables.html" title="" class="exp"><img src="images/icons/light/frames.png" alt="" />Tables<strong>3</strong></a>
                    <ul>
                        <li><a href="table_static.html" title="">Static tables</a></li>
                        <li><a href="table_dynamic.html" title="">Dynamic table</a></li>
                        <li class="last"><a href="table_sortable_resizable.html" title="">Sortable &amp; resizable tables</a></li>
                    </ul>
                </li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/fullscreen.png" alt="" />Widgets and grid<strong>2</strong></a>
                    <ul>
                        <li><a href="widgets.html" title="">Widgets</a></li>
                        <li class="last"><a href="grid.html" title="">Grid</a></li>
                    </ul>
                </li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/alert.png" alt="" />Error pages<strong>6</strong></a>
                    <ul class="sub">
                        <li><a href="403.html" title="">403 page</a></li>
                        <li><a href="404.html" title="">404 page</a></li>
                        <li><a href="405.html" title="">405 page</a></li>
                        <li><a href="500.html" title="">500 page</a></li>
                        <li><a href="503.html" title="">503 page</a></li>
                        <li class="last"><a href="offline.html" title="">Website is offline</a></li>
                    </ul>
                </li>
                <li><a href="file_manager.html" title=""><img src="images/icons/light/files.png" alt="" />File manager</a></li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/create.png" alt="" />Other pages<strong>3</strong></a>
                    <ul>
                        <li><a href="typography.html" title="">Typography</a></li>
                        <li><a href="calendar.html" title="">Calendar</a></li>
                        <li class="last"><a href="gallery.html" title="">Gallery</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="cLine"></div>
    </div>

    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5><?php echo $_SESSION['user'];?></h5>
                <span>您可以在这里管理您的商城</span>
            </div>
            <div class="middleNav">
                <ul>
                    <li class="mUser"><a href="accm.php" title="账户管理" class="tipN"><span class="users"></span></a>

                    </li>
                    <li class="mFiles"><a href="updatelv.php" title="更新会员等级" class="tipN"><span class="files"></span></a></li>
                    <li class="mOrders"><a href="purchaser.php" title="购买记录" class="tipN"><span class="orders"></span></a>

                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>


    <!-- Page statistics and control buttons area -->


    <div class="line"></div>

    <!-- Main content wrapper -->




    <!-- Chart -->


    <!-- Widgets -->


    <!-- Search -->


    <!-- Purchase info widget -->

    <b style="font-family: 黑体;font-size: 3em;position: relative; left:700px; top:160px;"><?php if($_GET['tip']==1) echo "修改成功"; else echo "密码不正确";?></b>
    <!-- New users widget -->




</div>

<div class="clear"></div>

</body>
</html>