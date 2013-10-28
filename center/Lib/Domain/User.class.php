<?php
class User extends DomainObject
{
	protected function Create()
	{}
	protected function Update()
	{}
	protected function _delete()
	{}
	
	private $_Info = null;
	private $_Organizations = null;
	private $_Apps = null;
	public function Info()
	{
		if(!$this->_Info)
		{
			$UserInfo = new UserInfoModel();
			$this->_Info = $UserInfo->find($this->Model->id);
		}
		return $this->_Info;
	}
	public function Organizations()
	{
		if(!$this->_Organizations)
		{
			//load from db;
		}
		return $this->_Organizations;
	}
	public function AddOrganization(OrganizationModel $org)
	{}
	public function RemoveOrganization(OrganizationModel $org)
	{}
	public function Apps()
	{}
	public function AddApp(AppModel $App)
	{}
	public function RemoveApp(AppModel $App)
	{}
}
?>