<?php
/**
*用户中心,2013-07-03
*/
class UserAction extends Action{
	//首页:我的订单历史
	 public function index (){
		/*if($_SERVER["SERVER_NAME"] == "tw.myctrip.com"){
			$this->redirect('/travel/login'); 
		}else{ 
				$this->redirect('/travel/index');
		}*/
		return $this->center();
    }    
	//个人中心
    public function center (){
		$user = $this->user;
		$this->assign("user",$user);
		$this->display();
    }  
	//验证邮箱是否可用
	public function checkemail(){ 
		header("Content-type: application/json");
		$data["username"] = mysql_escape_string($_POST["username"]); 
		if(empty($data["username"])){ 
			 echo json_encode(array("state"=>1));
			 exit;
		}
		$userModel = M(C("TRIP_DB_PREFIX")."user");
		$usertemp = $userModel->where("username='".$data["username"]."'")->select();
		if(!empty($usertemp[0])){//已有此用户 
			 echo json_encode(array("state"=>2));
		}else{ 
			 echo json_encode(array("state"=>3));
		}
	}
	//注册用户
	public function register(){
		if(!empty($_POST)){ 
			header("Content-type: application/json");
			$data["username"] = mysql_escape_string($_POST["username"]); 
			$data["userpass"] = mysql_escape_string($_POST["userpass"]); 
			$data["confirmuserpass"] = mysql_escape_string($_POST["confirmuserpass"]); 
			if($data["userpass"] != $data["confirmuserpass"]){ 
				 echo json_encode(array("state"=>0));
			}else{ 
				$userModel = M(C("TRIP_DB_PREFIX")."user");
				unset($data["confirmuserpass"]);
				$data["userpass"] = md5($data["userpass"]);
				$data["level"] = 3;
				$data["realname"] = mysql_escape_string($_POST["realname"]);
				$data["addtime"] = time();
				$data["invalidtime"] = $data["addtime"]+3600*24*30*12;
				$data["state"] = 1;
				$userModel = M(C("TRIP_DB_PREFIX")."user");
				$state = $userModel->add($data);
				if($state){ 
					cookie("front",array("id"=>$state,"realname"=>$data["realname"]));
					echo json_encode(array("state"=>$state));
				}else{ 
					echo json_encode(array("state"=>0));
				}
				 
			}
			exit;
		}
		$this->display();
	}
	//登录页面
	public function login(){
		if(!empty($_POST)){//proc login
			$verify = $_POST['verifycode'];
	        if ($_SESSION['verifycode'] != md5($verify)){//比较session保存的验证码和输入的验证码
	        	 $this->error('验证码错误，请返回重试！');	
	        }
			header("Content-type: application/json");
			$data["username"] = mysql_escape_string($_POST["username"]); 
			$data["userpass"] = md5(mysql_escape_string($_POST["userpass"])); 
			$data["state"] = 1;
			$userModel = M(C("TRIP_DB_PREFIX")."user");
			$userInfo = $userModel->field("id,realname")->where($data)->select();
			if(!empty($userInfo)){ 
				cookie("front",$userInfo[0]);
				echo json_encode(array("state"=>1));
			}else{ 
				 echo json_encode(array("state"=>0));
			}
			exit;
		}
		$this->display();
	}
	//退出
	public function logout(){
		if(!empty($this->user)){ 
			cookie("front",null);
			$this->redirect('/index'); 
		}else{ 
			$this->redirect('/user/login'); 
		}
	}
}
