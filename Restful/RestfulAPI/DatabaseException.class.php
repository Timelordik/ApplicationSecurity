<?php
	class DBException extends Exception
	{
		public function hataGoruntule()
		{
			echo "Message: " . $this -> getMessage() . "<br />";
		}
	}
