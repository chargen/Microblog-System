<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DBLOG</title>
    <link href="/DBLOG/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/DBLOG/Public/jquery/jquery-1.11.3.min.js"></script>
    <link href="/DBLOG/Public/css/global.css?v=20161231204509" rel="stylesheet">
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
                        <a class="btn btn-default nav-ico" href="<?php echo U('Post/add');?>"
                           role="button">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="col-lg-1 col-md-1 col-xs-0"></div>
</div>

<link href="/DBLOG/Public/css/index.css?v=20161231204509" rel="stylesheet">
<div class="container ">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-xs-1"></div>
        <div class="col-lg-8 col-md-8 col-xs-10">
            <div class="row content-top">
                <!-- 搜索框-->
                <div class="col-md-10 col-sm-10 col-xs-8">
                    <input type="text" class="form-control input-search" placeholder="搜索...">
                </div>
                <!-- 排序规则 -->
                <div class="col-md-2 col-sm-2 col-xs-4">
                    <div class="dropdown dropdown-order">
                        <button class="btn btn-default dropdown-toggle btn-order" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            排序
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">按最新</a></li>
                            <li><a href="#">按热度</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- 博客列表-->
            <?php if(is_array($posts)): foreach($posts as $key=>$vo): ?><div class="media">
                    <div class="media-left">
                        <a>
                            <img src="/DBLOG/Public/pics/<?php echo ($vo['headshot_id']); ?>.png" style="width: 100px;height:100px">
                        </a>
                    </div>
                    <div class="media-body">
                        <?php $url = U('Post/content?postid=' . $vo['postid']); ?>
                        <a href="<?php echo ($url); ?>" class="post-title"
                           style="font-size: 25px"><?php echo ($vo['title']); ?></a>
                        <br>
                        <div> <?php echo ($vo['content']); ?>
                        </div>
                        <div style="padding-top: 0px"><?php echo ($vo['time']); ?> &nbsp; <?php echo ($vo['read_count']); ?></div>
                    </div>
                </div><?php endforeach; endif; ?>


            <div id="test"></div>
            <!-- 分页导航条 -->
            <div>
                <nav>
                    <ul class="pagination">
                        <li id="pre">
                            <a aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-nav-p active"><a class="page-nav" href="#">1</a></li>
                        <?php
 $per_page=($num_page>5)?(5):$num_page; for ($i=2; $i<=$per_page; $i++) { echo '
                        <li class="page-nav-p"><a class="page-nav" href="#">'.$i.'</a></li>
                        '; } ?>
                        <li id="next" data-num-page="<?php echo ($num_page); ?>">
                            <a data-num-page="<?php echo ($num_page); ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div><!-- row -->
</div><!-- container -->

<script src="/DBLOG/Public/js/footer.js?v=20161231204509"></script>
<footer class="bs-docs-footer">
    <div class="container">
        <div><a href="https://github.com/CyC2018/DBLOG">GitHub 仓库</a></div>
        <p>本项目源码受 <a rel="license" href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a>开源协议保护，文档受
            <a rel="license" href="https://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a> 开源协议保护。
        </p>
    </div>
</footer>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/DBLOG/Public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>