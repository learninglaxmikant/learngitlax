<?php 
class TV {
	
	//public $model = 'Samsung';
	//public $volume='1';

	protected $model;
	public $volume;

	function volumeup() {

		$this->volume++;
	}

	function volumedown() {
		$this->volume--;
	}

	function getModel() {
		return $this->model;
	}
	function __construct($m, $v) {

		$this->model = $m;
		$this->volume = $v;

	}
}

class TVRemote  extends TV 
{
	public $remote;

	//function __construct() {

		//echo "in child constructor";
	//}

	function getModel() {
		return $this->model;
	}
}

$tv_one= new TVRemote('samsung','5');
//$tv_two= new TV;

echo $tv_one->getModel();

?>