<?php
/**
* 
*/
class autoload
{
	public static function load($className)
	{
		$fileName = sprintf('%s.php', str_replace('\\', '/', $className));
		if (is_file($fileName))
			require_once $fileName;
	}
}
spl_autoload_register(['autoload', 'load']);	
