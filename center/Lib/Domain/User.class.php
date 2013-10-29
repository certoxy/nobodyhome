<?php
class User extends DomainObject
{
	//每个domain最好显室式重写构造函数 ，判断传入的Model实例，以避免可能出现的错误
	public function __construct(UserModel $model)
	{
		if(!$model)
			$model = new UserModel();
		parent::__construct($model);
	}
	protected function _create()
	{
		if(!$this->Model->id)
		{
			return $this->Model->add();
		}
		return false;
	}
	protected function _update()
	{}
	protected function _delete()
	{}
	
	private $_Info = null;
	private $_Organizations = null;
	private $_Apps = null;
	public function Info()
	{
		if( $this->Model->id && !$this->_Info)
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