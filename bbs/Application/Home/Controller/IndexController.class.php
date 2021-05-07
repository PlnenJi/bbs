<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    Public function index(){

    	$name = "icekling";
    	$login_time = time();
    	$this->assign('time',$login_time);
    	$this->assign('username',$name);
       $this->display();
    }
}