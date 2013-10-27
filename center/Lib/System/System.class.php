<?php
class System 
{
	private function __construct()
	{}
	
	
	private static $_CurrentUser = null;//account数据数组
	/* [CurrentUser 获取当前登录用户]
	 * @Summary				 [$_CurrentUser不为null，返回$_CurrentUser,否则通过用户cookie的tiket从memcache获取account数据，否则返回null]
	 * @Return  {user}      	 []
	 * @Editor  nobody
	 * @Time    2013-10-21
	 */
	public static function CurrentUser()
	{
		if( ! self::$_CurrentUser )
		{
			if($_COOKIE['tiket'])
			{
				self::$_CurrentUser = MemcacheServer::Get($_COOKIE['tiket']);
			}
		}
		return self::$_CurrentUser;	
	}
	
	
}
?>