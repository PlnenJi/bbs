<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller{
    public function add(){
        $this->display();
    }
    public function insert(){
        $db = M('Form');
        $data['title'] = I('post.title');
        $data['content'] = I('post.titie');
        $data['create_time'] = time();
        $db->add($data);
    }
}


