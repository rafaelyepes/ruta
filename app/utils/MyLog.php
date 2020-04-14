<?php

class MyLog
{
	/**
	*@var \Monolog\Logger
	*/
	private $log;


	/**
	 *MyLog Constructor
	 *@param string $filename 
	 *@throws Exception 
	 */
	public function __construct(string $filename)
	{
		$this->log = new Monolog\Logger('name');
		//$this->log->pushHandler(new Monolog\Handler\StreamHandler($filename, Monolog\Logger::WARNING));

		$this->log->pushHandler(new Monolog\Handler\StreamHandler($filename, Monolog\Logger::INFO));
	}

	 /**
	 *@param string $filename   
	 *@return Mylog   
	 *@throws Exception
	 */
	public static function load(string $filename):Mylog
	{
		return new MyLog($filename);
	}


	 /**
	 *@param  string  $message   
	 *@throws Exception
	 */
	public function add(string $message):void
	{
		//$this->log->addinfo($message);
		$this->log->warning($message);
	}


}