<?php
class UserValidateAction extends Action
{
	protected $User;
	public function __construct()
	{
		parent::__construct();
		if( ! session("ID") )
    	 	$this->redirect("Index/Login" );
    	else 
    	{
    		$this->User = D("User");
    		$UserInfo = $this->User->relation(true)->find(session('ID'));
    		if(false === $UserInfo)
    		{
    			$this->redirect("Index/Login" );
    		}
    		else 
    		{
    			$this->User->create($UserInfo);
    			$this->assign("User",$this->User);
    		}
    		
    		/*获取站内信统计数据
    		$MsgStatistics = D('MessageStatistics');
    		$list = $MsgStatistics->find($this->User->id);
    		$MsgStatistics->create($list);//echo $MsgStatistics->all;dump($MsgStatistics);exit();
    		$this->assign('MsgStatistics',$MsgStatistics);
    		//获取项目任务统计数据
    		$UserProjectStatistics = D('UserProjectStatistics');
			$data = $UserProjectStatistics->find($this->User->id);
			$UserProjectStatistics->create($data);
			$this->assign('UPS',$UserProjectStatistics);
			
			$this->User-relation(true)->find($this->User->id);
			dump($User);exit();*/
    		
    	}
    	
	}
}
?>