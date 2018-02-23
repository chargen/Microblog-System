<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>blok</title>
    <!-- Bootstrap -->
    <link href="/blok/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/blok/Public/jquery/jquery-1.11.3.min.js"></script>
    <!-- css -->
    <link href="/blok/Public/css/global.css" rel="stylesheet">
    <link href="/blok/Public/css/header.css" rel="stylesheet">
    <link href="/blok/Public/css/footer.css" rel="stylesheet">
    <!-- UMEditor -->
    <!--<link href="/blok/Public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">-->
    <!--<script type="text/javascript" charset="utf-8" src="/blok/Public/umeditor/umeditor.config.js"></script>-->
    <!--<script type="text/javascript" charset="utf-8" src="/blok/Public/umeditor/umeditor.min.js"></script>-->
    <!--<script type="text/javascript" src="/blok/Public/umeditor/lang/zh-cn/zh-cn.js"></script>-->
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
                        <?php if(session('user_id')==null ): ?><!-- 未登录状态 -->
                            <!-- 登录 -->
<script src="/blok/Public/js/sign-in.js"></script>
<link href="/blok/Public/css/sign-in.css" rel="stylesheet">
<div class="modal fade" id="modal-sign-in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- 登录信息提交 -->
                <form class="form-horizontal" method="POST" action="<?php echo U('User/sign_in');?>">
                    <div class="form-group sign-in-name">
                        <label class="col-sm-2 control-label">用户名</label>
                        <div class="col-sm-10">
                            <input name="name" id="sign-in-name" type="text" class="form-control name"
                                   placeholder="">
                        </div>
                    </div>
                    <div class="form-group sign-in-password password">
                        <label class="col-sm-2 control-label">密码</label>
                        <div class="col-sm-10">
                            <input name="password" id='sign-in-password' type="password" class="form-control"
                                   placeholder="">
                        </div>
                    </div>
                    <div class="form-group sign-in-verify verify">
                        <label class="col-sm-2 control-label">验证码</label>
                        <div class="col-sm-10">
                            <input name="" id='sign-in-verify' type="text" class="form-control" placeholder="">
                            <span class="glyphicon form-control-feedback verify-check" aria-hidden="true"></span>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <img class="img-verify" src="<?php echo U('User/build_verification');?>" alt="">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <!--<button type="button" class="btn btn-default to-sign-up" data-dismiss="modal">去注册</button>-->
                    <button type="submit" class="btn btn-primary btn-sign-in-submit form-group">点击登录</button>
                </div>
            </div>
        </div>
    </div>
</div>

                            <!-- 注册 -->
<script src="/blok/Public/js/sign-up.js"></script>
<!--<link href="/blok/Public/css/sign-up.css" rel="stylesheet">-->
<div class="modal fade" id="sign-up-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- 注册信息提交 -->
                <form class="form-horizontal" method="POST" action="<?php echo U('User/sigh-up');?>">
                    <div class="form-group name">
                        <label class="col-sm-2 control-label">用户名</label>
                        <div class="col-sm-10">
                            <input name="name" for="inputSuccess1" id='sign-up-name' type="text"
                                   class="form-control name" placeholder="">
                            <span class="glyphicon form-control-feedback check" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group password">
                        <label class="col-sm-2 control-label">密码</label>
                        <div class="col-sm-10">
                            <input name="password" id='sign-up-password' type="password" class="form-control"
                                   placeholder="">
                        </div>
                    </div>
                    <div class="form-group password-confirm">
                        <label class="col-sm-2 control-label">确认密码</label>
                        <div class="col-sm-10">
                            <input name="password_confirm" id="sign-up-password-confirm" type="password"
                                   class="form-control password_confirm" placeholder="">
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary btn-sign-up-submit form-group">点击注册</button>
                </div>
            </div>
        </div>
    </div>
</div>

                            <li>
                                <button type="button" class="btn btn-default btn-default nav-ico btn-sign-in">
                                    <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                </button>

                            </li>
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

<div class="container ">
    <div class="row">
        <div class="col-md-9">
            <div class="menu">
                <button type="button" class="btn btn-default menu1">赞消息</button>
                <button type="button" class="btn btn-default menu2">回复消息</button>
                <button type="button" class="btn btn-default menu3">系统消息</button>
            </div>
            <div class="panel-group"  role="tablist" aria-multiselectable="true">
                <?php if(is_array($messages)): foreach($messages as $key=>$vo): $style=($vo['read']==0)?"background-color:#f5f5f5":"";?>
                        <div id="message-<?php echo ($vo['messageid']); ?>" class="panel  panel-success message-type-<?php echo ($vo['type']); ?>">
                            <div class="panel-body" style="<?php echo ($style); ?>">
                                <?php echo ($vo["content"]); ?>
                                <button type="button" data-messageid="<?php echo ($vo['messageid']); ?>" data-userid="<?php echo ($vo['userid']); ?>"class="close message-delete" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            </div>
                            <div class="panel-footer"><?php echo ($vo["time"]); ?></div>
                        </div><?php endforeach; endif; ?>
            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</div>
<!-- 消息列表 -->
<footer class="bs-docs-footer">
    <div class="container">
        <div><a href="https://github.com/00000H/LAMP-Blog-System">GitHub 仓库</a></div>
        <p>本项目源码受 <a rel="license" href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a>开源协议保护，文档受
            <a rel="license" href="https://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a> 开源协议保护。
        </p>
    </div>
</footer>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/blok/Public/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>