<?php

class Log
{
	public $filename;

	public function logMessage($logLevel, $message)
	{
	    // todo - complete this function   
		$handle = fopen($this->filename, 'a');
		fwrite($handle, date('y-m-d H:i:s '). $logLevel . $message .PHP_EOL);
		fclose($handle);
	}
	public function logInfo($message)
	{
		$this->logMessage('INFO:', $message);
	}
	public function logError($message)
	{
		$this->logMessage('ERROR:', $message);
	}

}

// -******* fers example ********
// class Log
// {
// 	public $filename;
// 	public $datetime;
// 	public $handle;

// 	function logMessage($logLevel, $message)
// 	{
// 		$sring = "{$this->datetime} $logLevel $message".PHP_EOL;
// 		fwrite($this->handle, $string);
// 	}
// 	function info()
// 	{
// 		$this->logMessage("INFO", "This is the first info message.");
// 	}
// 	function error()
// 	{
// 		$this->logMessage("ERROR", "This is the second info message.");
// 	}

// }
	