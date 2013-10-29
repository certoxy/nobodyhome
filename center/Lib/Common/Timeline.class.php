<?php
class Timeline 
{
	public static function GetCurrentMonth()
	{
		return date('Ym');
	}
	public static function GetLastMonth()
	{
		$Month = self::GetCurrentMonth();
		$Year = substr($Month, 0,4);
		$Month = substr($Month,4,2);
		$Month = mktime(0,0,0,$Month-1,1,$Year);
		return date('Ym',$Month);
	}
	public static function GetNextMonth()
	{
		$Month = self::GetCurrentMonth();
		$Year = substr($Month, 0,4);
		$Month = substr($Month,4,2);
		$Month = mktime(0,0,0,$Month+1,1,$Year);
		return date('Ym',$Month);
	}
}
?>