<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" ng-app>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MI研究所</title>
    <link href="<?php echo base_url() . 'style/index/' ?>css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url() . 'style/index/' ?>css/homepage.css" rel="stylesheet" />
    <link href="<?php echo base_url() . 'style/index/' ?>css/common.css" rel="stylesheet" />


</head> 
<body>
    <!--登录导航条-->
    <nav class="navbar navbar-default container" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="" class="navbar-brand"></a>
                <form action="" class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="搜索"/>
                        <button class="glyphicon glyphicon-search navbar-button" type="submit"></button>
                    </div>
                </form>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-sign">
                        <a href="">
                            注册
                        </a>
                    </li>
                    <li class="navbar-login">
                        <a href="">
                            登录
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="nav nav-main" id="navMain">
        <ul class="container" ng-controller="NavCtrl">
            <li ng-repeat="name in names" >
                <a herf="" ng-bind="name"></a>
            </li>
        </ul>
    </nav>
    <div class="header">
        
    </div>

</body>
    <script src="<?php echo base_url() . 'style/index/' ?>js/angular-1.3.0.js"></script>
    <script src="<?php echo base_url() . 'style/index/' ?>js/homepage.js"></script>
</html>
