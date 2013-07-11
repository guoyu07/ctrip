<?php
/**
*API接口,2013-07-10
*/
class ApiAction extends Action{
	//帮助中心
    public function index (){
	   echo "Api";
    }
    //验证码
    public function verifycode(){ 
    	  import("front.Util.Image"); //导入验证码类
          import("front.Util.String"); //导入验证码类
          Image::buildImageVerify(4, 1, "png", 50, 25, 'manageverifycode'); //显示验证码
    }
}
