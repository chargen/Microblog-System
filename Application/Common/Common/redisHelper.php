<?php

function connect_redis()
{
    $redis = new \Redis();
    $redis->connect('127.0.0.1', 6379);
    return $redis;
}

function get_redis_cache($key)
{
    $redis = connect_redis();
    return json_decode($redis->get($key), true);
}

function set_redis_cache($key, $content)
{
    $redis = connect_redis();
    $redis->set($key, json_encode($content));
}

function build_redis_key($table_name, $id)
{
    return $table_name . ":" . $id;
}

