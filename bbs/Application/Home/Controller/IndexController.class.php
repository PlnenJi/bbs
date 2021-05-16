<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    Public function index(){

    	//  $name = "伊尔";

    	//  $login_time = time();
    	//  $this->assign('time',$login_time);
    	//  $this->assign('username',$name);    //赋值到模板变量
    	$name = "yierlove";
    	$login_time = time();
    	$date['name'] = $name;
    	$date['time'] = $login_time;
    	$this->assign('date',$date);
       $this->display();   //view/Index/index.html
    }
}