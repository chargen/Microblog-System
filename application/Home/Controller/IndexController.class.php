<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $page = $_GET['page'];
        if (!isset($page)) $page = 0;
        $order = $_GET['order'];
        if (!isset($order)) $order = 'time';
        $posts = $order == 'time' ? $this->get_posts_by_time($page) : $this->get_posts_by_read_count($page);
        $this->assign('posts', $posts);
        $this->assign('page', $page);
        $post_num = get_post_num();
        $this->assign('post_num', $post_num);

        $this->display();
    }

    public function get_posts_by_time($page)
    {
        $posts_id = M('post')->limit(5 * $page, 5)->order('time desc')->field('postid')->select();
        return $this->get_posts($posts_id);
    }

    public function get_posts_by_read_count($page)
    {
        $posts_id = M('post')->limit(5 * $page, 5)->order('read_count desc')->field('postid')->select();
        return $this->get_posts($posts_id);
    }

    public function get_posts($posts_id)
    {
        $post_M = M('post');
        for ($i = 0; $i < count($posts_id); $i++) {
            $post_id = $posts_id[$i]['postid'];
            $redis_key = build_redis_key("post", $post_id);
            $cache = get_redis_cache($redis_key);
            if ($cache) {
                $contents[$i] = $cache;
                $contents[$i]['source'] = "redis";
            } else {
                $map['postid'] = $post_id;
                $contents[$i] = $post_M->where($map)->find();
                // 如果没缓存，需要将数据添加到缓存中
                set_redis_cache($redis_key, $contents[$i]);
                $contents[$i]['source'] = "mysql";
            }
        }
        return $contents;
    }

}