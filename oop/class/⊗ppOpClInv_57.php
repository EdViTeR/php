<?php
require_once '⊗ppOpClDt_56.php';

class Interval {

	public function __construct(Date $date1, Date $date2) {
		$this->date1 = $date1;
		$this->date2 = $date2;
	}
	
	// вернет разницу в днях
	public function toDays() {
		$diff = date_diff(date_create($this->date1), date_create($this->date2));
		return $diff->format('%a дней');
	}
	
	// вернет разницу в месяцах
	public function toMonths() {
		return abs(($this->toYears() * 12) + ($this->date1->getMonth() - $this->date2->getMonth()));
	}
	
	// вернет разницу в годах
	public function toYears() {
		return abs($this->date1->getYear() - $this->date2->getYear());
	}
}

$date1 = new Date('2025-12-31');
$date2 = new Date('2026-11-28');
$interval = new Interval($date1, $date2);
echo '<br></br><br></br>' . $interval->toDays();
echo '<br></br>' . $interval->toYears();
echo '<br></br>' . $interval->toMonths();