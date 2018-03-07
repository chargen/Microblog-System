<?php
namespace Home\Controller;

use Think\Controller;

class TestController extends Controller
{
    public function add()
    {
        $_POST['title'] = 'Media heading';
        $_POST['content'] = 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.';
        $_POST[headshot_id] = rand(1, 4);
        R("Post/add_handle");
    }

    public function read()
    {
        $this->redirect('Post/content',array('postid' => rand(1, get_post_num())));
    }
}