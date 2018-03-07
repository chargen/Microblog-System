<?php

function get_read_count($post_id)
{
    check_read_count($post_id);
    $redis = connect_redis();
    $count = $redis->zScore('read-count', $post_id);
    return $count;
}

function inc_read_count($post_id)
{
    check_read_count($post_id);
    $redis = connect_redis();
    $redis->zIncrBy('read-count', 1, $post_id);
}

function check_read_count($post_id)
{
    $redis = connect_redis();
    $count = $redis->zScore('read-count', $post_id);
    if (!$count) {
        $redis->zAdd('read-count', 0, $post_id);
    }
}

