<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $posts = M('post')->limit(5)->select();
        $this->assign('posts', $posts);
        $this->display();
    }
}