<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action 
{
    public function Index()
    {
    	$cache = Cache::getInstance();
    	$cache->set('a','aa');
    	echo $cache->get('a');
    	
    	
	}
	public function Logon()
	{}
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