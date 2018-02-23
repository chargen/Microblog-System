<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>blok</title>
    <link href="/blog-system/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/blog-system/Public/jquery/jquery-1.11.3.min.js"></script>
    <link href="/blog-system/Public/css/global.css" rel="stylesheet">
    <link href="/blog-system/Public/css/header.css" rel="stylesheet">
    <link href="/blog-system/Public/css/footer.css" rel="stylesheet">
</head>

<body>
<!-- 导航栏 -->
<div class="row nav-top-container">
    <div class="col-lg-1 col-md-1 col-xs-0"></div>
    <div class="col-lg-10 col-md-10 col-xs-12">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="btn btn-default btn-lg nav-ico btn-nav-home" href="<?php echo U('Index/index');?>" role="button">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(session('user_id')==null ): ?><li ><a href="<?php echo U('Sign/in');?>">Sign in</a></li>
                            <li><a href="<?php echo U('Sign/up');?>">Sign up</a></li>
                            <?php else: ?>
                            <!-- 已登录状态 -->
                            <a class="btn btn-default nav-ico" href="<?php echo U('User/message');?>"
                               role="button">
                                <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>
                            </a>
                            <a class="btn btn-default nav-ico" href="<?php echo U('Post/add');?>"
                               role="button">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                            <a class="btn btn-default nav-ico" href="<?php echo U('User/out');?>"
                               role="button">
                                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                            </a>
                            <a class="btn btn-default nav-ico" href="<?php echo U('User/user');?>"
                               role="button">
                                <span class="glyphicon  glyphicon-user" aria-hidden="true"></span>
                            </a><?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="col-lg-1 col-md-1 col-xs-0"></div>
</div>

<link href="/blog-system/Public/css/sign.css" rel="stylesheet">
<div class="container sign">
    <form class="form-signin">
        <h3 class="form-signin-heading">Please sign in</h3>
        <br>
        <label class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <br>
        <label class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <br>
        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div> <!-- /container -->
<footer class="bs-docs-footer">
    <div class="container">
        <div><a href="https://github.com/00000H/LAMP-Blog-System">GitHub 仓库</a></div>
        <p>本项目源码受 <a rel="license" href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a>开源协议保护，文档受
            <a rel="license" href="https://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a> 开源协议保护。
        </p>
    </div>
</footer>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/blog-system/Public/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>