<?php
class IndexAction extends Action 
{
    public function Index()
    {
    	echo System::CurrentUserStatistics()->Model->user_new ;
    	
	}
	public function Logon($TargetURL = null)
	{
	}
	protected function Dologon()
	{
	}
	public function Register()
	{
		$UserModel = new UserModel();
		$UserModel->create();
		$UserService = new UserService();
		$result = $UserService->Register($UserModel);
		//--结果处理----
	}
	public function ChangePwd()
	{}
	public function Logout()
	{}
	public function Verify($Token)
	{}
	public function Retrive()
	{}
	
}