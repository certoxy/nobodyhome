<?php
abstract class FireworkModel extends RelationModel
{
	protected $_relation = array();
	protected $validate = array();
	public function SetRelation($type)
 	{
 		$this->_link[$type] = $this->_relation[$type];
 		return $this;
 	}
 	public function ClearRelation()
 	{
 		$this->_link = array();
 		return $this;
 	}
	public function SetValidate($type)
 	{
 		$this->_validate[$type] = $this->validate[$type];
 		return $this;
 	}
 	public function ClearValidate()
 	{
 		$this->_validate = array();
 		return $this;
 	}
}
?>