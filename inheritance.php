<?php 
class TV {
	
	//public $model = 'Samsung';
	//public $volume='1';

	public $model;
	public $volume;

	function volumeup() {

		$this->volume++;
	}

	function volumedown() {
		$this->volume--;
	}

	function __construct($m, $v) {

		$this->model = $m;
		$this->volume = $v;

	}
}

class TVRemote  extends TV 
{
	public $remote;

	function __construct() {

		echo "in child constructor";
	}
}

$tv_one= new TVRemote('samsung','5');
//$tv_two= new TV;

echo $tv_one->model;

?>