<?php
class AccountStatisticsService
{
	public function GetCurrentStatistcs()
	{	
		//获取当前月统计数据
	}
	public function GetLastStatistics()
	{}
	public function GetStatisticsByMonth($Month)
	{}
	public function CreateStatistics(AccountStatisticsModel $AccStatisticsModel)
	{
		$Result = new Result();
		if($AccStatisticsModel && $ID = $AccStatisticsModel->add())
		{
			
			$Result->Status = 1;
			$Result->Message = 'SUCCESS';
			$Result->Data = $this->GetAccountStatisticsBy($ID);
		}
		else
		{
			$Result->Status = 0;
			$Result->Message = '保存失败！';
		}
		return $Result;
	}
	public function GetAccountStatisticsBy($ID)
	{
		$AccStatistics = new AccountStatisticsModel();
		$AccStatistics = $AccStatistics->find($ID);
		return $AccStatistics;
	}
	
}
?>