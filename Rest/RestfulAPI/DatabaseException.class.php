<?php
	class DatabaseBException extends Exception
	{
		public function hataGoruntule()
		{
			echo "Message: " . $this -> getMessage() . "<br />";
		}
	}
