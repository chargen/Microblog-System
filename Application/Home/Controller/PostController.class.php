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
        inc_post_num();
        $this->ajaxReturn($post_id);
    }

    public function content()
    {
        $post_M = M('post');
        $map['postid'] = $_GET['postid'];
        // 阅读量加 1
        $post_M->where($map)->setInc('read_count');
        $post = $post_M->where($map)->find();
        $this->assign("post", $post);
        $this->display();
    }
}