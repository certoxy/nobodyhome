<?php
abstract class AuthAction extends Action
{
	public function __construct()
	{
		parent::__construct();
		if( session("ID") )
		{
    		$this->User = D('User');
    		$this->User->SetRelation('Profile')->SetRelation('MsgStatistics')->SetRelation('ProjectStatistics')->SetRelation('TaskStatistics')->SetRelation('DocumentStatistics')->SetRelation('FriendStatistics');
    		$this->User->relation(true)->find(session('ID'));//dump($UserData);exit();
    		if($this->User)
    		{
    			$this->assign('User',$this->User); 		
    		}
    	}
    	else 
    	{
    		$this->redirect(C('AUTH_ERROR'));
    	}
	}
	protected $User = NULL;
	public function CurrentUser()
	{
		return $this->User;
	}
}
?>