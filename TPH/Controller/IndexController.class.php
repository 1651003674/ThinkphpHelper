<?php
//	ThinkphpHelper v0.3
//	
//	weiyunstudio.com
//	sjj zhuanqianfish@gmail.com
//	2014��9��18��
namespace TPH\Controller;
use Think\Controller;

class IndexController extends Controller {

    public function index(){
		$this->display("Public/help");
    }
	
	public function ui(){
		$this->display("Public/ui");
    }
	
	public function help(){
		$this->display("Public/help");
    }
}