<?php
/**
*后台系统入口,2013-07-02
*/
class IndexAction extends CommonAction{

    public function index (){
		
		$mid = !empty($_GET['mid']) ? ((int)$_GET['mid'] - 1) : 1;
		$pid = !empty($_GET['pid']) ? ((int)$_GET['pid']) : 0;
        $this->assign('mid',$mid);
		$this->assign('pid',$pid);
        $this->assign('time',time());
		
	 	$this->assign("header",$this->header);
	 	$this->assign("footer",$this->footer);
		$this->display();
    }   
	public function left(){ 
		$this->display();
	}
	public function main(){ 
		$this->display();
	}
}
