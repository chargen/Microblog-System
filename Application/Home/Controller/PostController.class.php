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
        $post_id = $_GET['postid'];
        $map['postid'] = $post_id;
        // 阅读量加 1
        inc_read_count($post_id);
        $post = get_post($post_id);
        $this->assign("post", $post);
        $this->display();
    }
}