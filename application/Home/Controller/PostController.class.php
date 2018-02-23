<?php
namespace Home\Controller;

use Think\Controller;

class PostController extends Controller
{
    public function add()
    {
        $this->display();
    }

    public function add_handle()
    {
        $info = $_POST;
        $now = new \DateTime();
        $info['time'] = $now->format('Y-m-d H:i:s');
        $post_id = M('post')->add($info);
        $this->ajaxReturn($post_id);
    }

    public function content()
    {
        $map['postid'] = $_GET['postid'];
        $post = M('post')->where($map)->find();
        $this->assign("post", $post);
        $this->display();
    }
}