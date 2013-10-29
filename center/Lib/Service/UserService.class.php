<?php
class UserService 
{
	public function Register(UserModel $UserModel)
	{
		//没测试----
		$User = new User($UserModel);
		$User->Save();
		System::CurrentUserStatistics()->UserIncrease();
		return new Result();
		
	}
	public function Logon(AccountModel $Account)
	{}
	public function Logout()
	{}
	public function Verify(UserModel $User)
	{}
	public function UpdateAccount(AccountModel $Account)
	{}
	public function DeleteUser(AccountModel $Account)
	{}
	public function GetAccountByEmail($Email)
	{}
	public function GetAccountByVerifyTokey($VerifyToken)
	{}
	public function GetAccountByID($ID)
	{}
	Public function GetAccountList()
	{}
	public function AddApp(AccountModel $Account,AppModel $App)
	{}
	public function GetUserAppList(UserModel $UserModel)
	{}
	public function AddOrganization(AccountModel $Account,OrganizationModel $Organization)
	{}
	public function GetCurrentUserStaistics($Month)
	{}

	
}
?>