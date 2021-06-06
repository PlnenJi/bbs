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
    public function vcode(){
$config =    array(
    'fontSize'    =>    50,    // 验证码字体大小
    'length'      =>    15,     // 验证码位数
    'useNoise'    =>    false, // 关闭验证码杂点
);
$Verify =     new \Think\Verify($config);
$Verify->entry();
}
}


