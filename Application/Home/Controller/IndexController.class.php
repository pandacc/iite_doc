<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
    	$login_user = session("login_user");
    	$this->assign("login_user" ,$login_user);
        $this->display();
    }
}