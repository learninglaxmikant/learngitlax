<?php
class abc  {
	
	public static $data;

	public static function getdata() {

	   //self::$data;

		echo "<br>  I am calling from getdata() function";
	}
}

abc::getdata();

?>