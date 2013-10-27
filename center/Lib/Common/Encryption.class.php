<?php
class Encryption
{
	public static function Crypt($Value)
	{
		return crypt($Value);
	}
	public static function MD5($Value)
	{
		return md5($Value);
	}
	public static function SHA1($Value)
	{
		return sha1($Value);
	}
}
?>