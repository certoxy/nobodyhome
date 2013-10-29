<?php
abstract class DomainObject
{
	public function __construct(Model $model)
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
		return $this->IsNew() ? $this->_create:$this->_update();
		
	}
	abstract protected function _create();
	abstract protected function _update();
	public function Delete()
	{
		return $this->_delete();
	}
	abstract protected function _delete();
}
?>