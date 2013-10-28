<?php
// 鏈被鐢辩郴缁熻嚜鍔ㄧ敓鎴愶紝浠呬緵娴嬭瘯鐢ㄩ��
class IndexAction extends Action 
{
    public function Index()
    {
    	$cache = Cache::getInstance();
    	$cache->set('a','aa');
    	echo $cache->get('a');
    	
    	
	}
	public function Logon($TargetURL = null)
	{
		$User = new UserModel();
		$User->create();
		if($User)
		{
			
		}
	}
	protected function Dologon()
	{
	}
	public function Register()
	{}
	public function ChangePwd()
	{}
	public function Logout()
	{}
	public function Verify($Token)
	{}
	public function Retrive()
	{}
	
}