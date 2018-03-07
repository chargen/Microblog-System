<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $page = $_GET['page'];
        if (!isset($page)) $page = 0;
        $posts = get_posts($page);
        $this->assign('posts', $posts);
        $this->assign('page', $page);
        $this->assign('post_num', get_post_num());
        $this->display();
    }
}