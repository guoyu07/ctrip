<?php
/**
*公用继承,权限、用户信息、变量传递
*20130702 lx
*/
class CommonAction extends Action{
	protected $language;
	protected $user;
	protected $uid;
	
	public function _initialize(){
		$this->user = (array)cookie('front'); 
		if(!$this->user){ 
			Header("Location:".__APP__."/user/login.html");
		}
	 	
		$this->assign("user",$this->user);
		$this->assign("uid",$this->user["id"]);
		$this->assign("language","Simple");
		$this->assign("header",$this->fetch("Public:header"));
		$this->assign("footer",$this->fetch("Public:footer"));
	}
}