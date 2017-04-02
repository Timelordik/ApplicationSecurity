<?php
	class DatabaseException extends Exception
	{
		public function hataGoruntule()
		{
			echo "Message: " . $this -> getMessage() . "<br />";
		}
	}
