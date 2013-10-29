<?php
class UserStatistics extends DomainObject
{
	
	public function __construct()
	{
		parent::__construct($this->CurrentUserStatistics());
		
	}
	/*
	 * [__construct 实例化当前月份用户统计对象]
	 * @summary [通过月份获取统计model实例化UserStatistics对象，如果当前月份数据不存在，拷贝上个月份统计数据，插入新数据再返回，若没有上个月份数据新增一条新数据再返回]
	 */
	protected function CurrentUserStatistics()
	{
		$UserStatisticsModel = new UserStatisticsModel();
		//获取当前月份统计数据
		if($data = $UserStatisticsModel->where('month='.Timeline::GetCurrentMonth())->select())
		{ 	
			$UserStatisticsModel->create($data[0]);
		}
		//获取上月统计数据
		else if($data = $UserStatisticsModel->where('month='.Timeline::GetLastMonth())->select())
		{
			$UserStatisticsModel->create($data[0]);
			$UserStatisticsModel->id = null;
			$UserStatisticsModel->user_new = 0 ;
			$UserStatisticsModel->user_active = 0;
			$UserStatisticsModel->month = Timeline::GetCurrentMonth();
			$key = $UserStatisticsModel->save();
			$UserStatisticsModel->find($key);
		}
		else 
		{
			//新建统计数据
			$UserStatisticsModel->user_total = 0;
			$UserStatisticsModel->user_new = 0 ;
			$UserStatisticsModel->user_unverified = 0;
			$UserStatisticsModel->user_active = 0;
			$UserStatisticsModel->month = Timeline::GetCurrentMonth();
			$key = $UserStatisticsModel->add();
			$UserStatisticsModel->find($key);
		}
		return $UserStatisticsModel;
	}
	protected function _create()
	{
		if($this->Model && !$this->Model->id)
		{
			return $this->Model->add();
		}
		return false;
	}
	protected function _update()
	{
		if($this->Model && $this->Model->id)
		{
			return $this->Model->save();
		}
		return false;
	}
	protected function _delete()
	{
		return false;
	}
	//--新增用户------
	public function UserIncrease($Num = 1)
	{
		$this->Model->user_total ++;
		$this->Model->user_new ++;
		$this->Model->user_unverified ++;
	}
	//--用户认证----
	//public function Unerrified
}

?>