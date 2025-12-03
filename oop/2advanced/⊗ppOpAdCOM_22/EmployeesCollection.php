<?php
require_once 'Employeer.php';

class EmployeesCollection {

	private $employeers;

    function __construct() {
        $this->employeers = [];
    }

    public function add($employeers) {
    	$this->employeers[] = $employeers;
    }

    public function show() {
    	foreach ($this->employeers as $key => $value) {
    		echo $value->name . ' ';
    	}
    }

    public function getAvg() {
    	$k = 0;
    	$sum = 0;
    	foreach ($this->employeers as $key => $value) {
    		++$k;
    		$sum += $value->salary;
    	}
    	return $sum/$k;
    }

    public function getSum() {
    	$sum = 0;
    	foreach ($this->employeers as $key => $value) {
    		$sum += $value->salary;
    	}
    	return $sum;
    }
}

$all = new EmployeesCollection();
$all->add(new Employeer('qwe', 1000));
$all->add(new Employeer('asd', 2000));
$all->add(new Employeer('ert', 3000));
$all->show();
echo $all->getAvg();
echo $all->getSum();
?>