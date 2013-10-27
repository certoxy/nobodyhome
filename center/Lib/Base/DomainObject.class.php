<?php
abstract class DomainObject
{
	public function __construct(Model $model= null)
	{
		$this->Model = $model;
	}
	public $Model = null;
	public function IsNew()
	{
		if ($this->Model)
		{
			$pk = $this->Model->getPk(); 
			return (bool)$this->Model->$pk;
		}
		return false;
	}
	public function Save()
	{
		return $this->IsNew() ? $this->Create():$this->Update();
		
	}
	abstract protected function Create();
	abstract protected function Update();
	public function Delete()
	{
		return $this->_delete();
	}
	abstract protected function _delete();
}
?>