<?php

function get_post_num()
{
    $redis = connect_redis();
    return $redis->get("post_num");
}

function inc_post_num()
{
    $redis = connect_redis();
    $redis->incr("post_num");
}

function get_page_num()
{
    $post_num = get_post_num();
    $page_num = (int)($post_num / 5);
    if ($post_num % 5 == 0) $page_num++;
    return $page_num;
}

function get_pre_page($page)
{
    return $page == 0 ? 0 : $page - 1;
}

function get_next_page($page)
{
    return $page == get_page_num() ? $page : $page + 1;
}

