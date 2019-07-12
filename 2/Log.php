<?php

	class Log {
		static private $logText;
	 
		static public function saveLog($s, $usedate = true) {
			self::$logText = fopen('log.txt','ab');
			if($usedate) {
				$time = '['.date('Y-m-d H:i:s').'] ';
			}
			else {
				$time = '';
			}
			fwrite(self::$logText,$time.$s."\n");
		}

		static public function getLog() {
			require 'log.txt';
		}

		static public function cleanLog($logText = 'log.txt') {
			unlink($logText);
		}
	}

	Log::saveLog('Hello');

	Log::getLog();

	//Log::cleanLog();


