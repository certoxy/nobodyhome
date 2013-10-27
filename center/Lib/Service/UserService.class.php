<?php
class UserService 
{
	public function Register(AccountModel $Account)
	{

	}
	public function Logon(AccountModel $Account)
	{}
	public function Logout()
	{}
	public function Verify(AccountModel $Account)
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
	public function GetUserAppList(AccountModel $Account)
	{}
	public function AddOrganization(AccountModel $Account,OrganizationModel $Organization)
	{}
	public function GetCurrentUserStaistics($Month)
	{}

	
}
?>