<?php 
  
  abstract class BaseClass {

  	 	public $fname;
  	 	public $lname;
  	 	public $salary;
		public $dept;

  	 	function getfullname() {

  	 		return $this->fname." ".$this->lname;
  	 	}

  	 	abstract public function getmonthlysalary();

  	 	function __construct($f,$l) {

  	 		$this->fname = $f;
  	 		$this->lname = $l;
  	 	}
  }

class fulltime extends BaseClass {

		public $annualsalary;
		function getmonthlysalary() {

  	 		return $this->annualsalary/12;
  	 	}

}
class contract extends BaseClass {

		  public $fname;
  	 	public $lname;
  	 	public $totalhours; 
  	 	public $hourrate;

  	 	function getfullname() {

  	 		return $this->fname." ".$this->lname;
  	 	}

  	 	function getmonthlysalarya() {

  	 		return $this->hourrate*$this->totalhours;
  	 	}

  	 	function __construct($f,$l) {

  	 		$this->fname = $f;
  	 		$this->lname = $l;
  	 	}
}

$fulltime = new fulltime('fulltime','employee');
$contract = new contract('contract','employee');
echo $fulltime->getfullname();
echo $contract->getfullname();
?>