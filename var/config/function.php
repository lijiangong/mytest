<?php
function error_handler($errno, $errstr, $errfile, $errline, $errcontext)
{ 
	//$errfile=str_replace(getcwd(),"",$errfile); 
	//$errstr=str_replace(getcwd(),"",$errstr); 
	$str = '';
	switch ($errno) {
		case E_USER_ERROR:
			$str .= "USER_ERROR \n";
			$str .= "PHP " . PHP_VERSION . " (" . PHP_OS . ")\n";
			exit(1);
			break;
		case E_USER_WARNING:
			$str .= "USER_WARNING \n";
			 break;
		case E_USER_NOTICE:
			 $str .= "USER_NOTICE \n";
			 break;
		 case E_NOTICE:
			 $str .= "NOTICE \n";
			 break;
		 case E_WARNING:
			 $str .= "WARNING \n";
			 break;
		 case E_RECOVERABLE_ERROR:
			 $str .= "RECOVERABLE_ERROR \n";
			 break;
		 case E_ALL:
			 $str .= "ALL \n";
			 break;
		 default:
			$str .= "Unknown Error Type \n";
			break;
	}
	 
	$str .= "Error level: [$errno]\n";
	$str .= "Error message: $errstr\n";
	$str .= "Error line: [$errline] \n";
	$str .= "Error where: $errfile\n";
	dump_log($str);
}
function _rare_shutdown_catch_error()
{
	$_error=error_get_last();

	if($_error && in_array($_error['type'],array(1,4,16,64,256,4096,E_ALL))){
		$str = '致命错误:'.$_error['message']."\n";
		$str .= '文件:'.$_error['file']."\n";
		$str .= '在第'.$_error['line']."行\n";
		dump_log($str);
	}
}
function dump_log($log = '')
{
	$logfile = (defined('LOG_PATH') ? LOG_PATH : __DIR__ . DS) . 'error.log';
	error_log($log . "\n", 3, $logfile);
}
function dump_data($log = '')
{
	$logfile = (defined('LOG_PATH') ? LOG_PATH : __DIR__ . DS) . 'data' . DS . time();
	error_log($log, 3, $logfile);
	return $logfile;
	// $logfile = (defined('LOG_PATH') ? LOG_PATH : __DIR__ . DS) . 'data' . DS . 'data';
	// error_log($log . "\n", 3, $logfile);
}