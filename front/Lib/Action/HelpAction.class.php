<?php
/**
*帮助中心,2013-07-03
*/
class HelpAction extends CommonAction{
	//帮助中心
    public function index (){
		/*if($_SERVER["SERVER_NAME"] == "tw.myctrip.com"){
			$this->redirect('/travel/login'); 
		}else{ 
				$this->redirect('/travel/index');
		}*/
		$this->display();
    }    
}
