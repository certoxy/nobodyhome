<?php
/*
 * SoapServer无法使用自动加载
 * 
 */
import('@.WebService.NgocnCenterUserService');
class WebServiceAction extends Action
{
	public function User()
	{
		$Server = new SoapServer(null,array("location"=>"http://www.center.com/WebService/User","uri"=>'http://www.center.com/WebService/User'));
		$Server->setClass("NgocnCenterUserService");
		$Server->handle();
	}
}
?>