<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>大运物流会员管理平台</title>

        <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo $this->_theme->baseUrl ?>/css/dashboard.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">大运物流会员管理平台</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">大运物流会员管理平台</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"> 发票申请</a></li>
                        <li><a href="#">发票列表</a></li>
                        <li><a href="#">车辆合同</a></li>
                        <li><a href="<?php echo $this->createUrl('/user/index'); ?>">企业资料</a></li>
                        <li><a href="<?php echo $this->createUrl('/user/password'); ?>">修改密码</a></li> 
                        <li><a href="<?php echo $this->createUrl('/user/loginout'); ?>">退出</a></li>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="#">会员中心 <span class="sr-only">(current)</span></a></li>
                        <li   > <a href="<?php echo $this->createUrl('/user/contract'); ?>" class="menu-icon fa fa-bar-chart-o"> 业务合同</a></li>
                      
                        <li><a href="#">发票列表</a></li>
                        <li><a href="#">车辆合同</a></li>
                        <li><a href="<?php echo $this->createUrl('/user/index'); ?>">企业资料</a></li>
                        <li><a href="<?php echo $this->createUrl('/user/password'); ?>">修改密码</a></li>
                        <li><a href="<?php echo $this->createUrl('/user/loginout'); ?>">退出</a></li>

                    </ul> 
                </div>