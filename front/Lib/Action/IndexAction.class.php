<?php
/**
*系统入口,2013-07-02
*/
class IndexAction extends CommonAction{

    public function index (){
		/*if($_SERVER["SERVER_NAME"] == "tw.myctrip.com"){
			$this->redirect('/travel/login'); 
		}else{ 
				$this->redirect('/travel/index');
		}*/
		$this->display();
    }    
}
