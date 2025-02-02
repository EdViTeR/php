<?php

class Date {

	private $date;

	public function __construct($date = null) {
		if ($date == null) {
			$this->date = date("Y-m-d");
		} else {
			$this->date = $date;
		}
	}
	
	public function getDay() {
		return date("d", strtotime($this->date));
	}
	
	/* возвращает месяц
	 	переменная $lang может принимать значение ru или en
	 	если эта не пуста - пусть месяц будет словом на заданном языке 
	*/ 
	public function getMonth($lang = null) {
		$month = date("m", strtotime($this->date)) - 1;
		switch ($lang) {
			case null:
				return $month = date("m", strtotime($this->date));
				break;
			case 'ru':
				$arr = array('январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь');
				return $arr[$month] . ' ' . $month + 1;
				break;
			case 'en':
				return date("l", strtotime($this->date)) . ' ' . $month + 1;
				break;
			
			default:
				// Язык не задан
				break;
		}
	}
	
	public function getYear() {
		return date("Y", strtotime($this->date));
	}
	
	// возвращает день недели
	public function getWeekDay($lang = null) {
		$day = getdate(strtotime($this->date));
		switch ($lang) {
			case null:
				return $day['wday'];
				break;
			case 'ru':
				$wday = $day['wday'] - 1;
				$arr = array('Понедельник', 'Вторник','Среда', 'Четверг','Пятница', 'Суббота', 'Воскресенье');
				return $arr[$wday];
				break;
			case 'en':
				return $day['weekday'];
				break;
			
			default:
				// Язык не задан
				break;
		}
	}
	
	// добавляет значение $value к дню
	public function addDay($value) {
		$this->date = $this->format(date_modify(date_create($this->date), $value . ' day'));
	}
	
	public function subDay($value) {
		$this->date = $this->format(date_modify(date_create($this->date), -$value . ' day'));
	}
	
	public function addMonth($value) {
		$this->date = $this->format(date_modify(date_create($this->date), $value . ' month'));
	}
	
	// отнимает значение $value от месяца
	public function subMonth($value) {
		$this->date = $this->format(date_modify(date_create($this->date), -$value . ' month'));
	}
	
	public function addYear($value) {
		$this->date = $this->format(date_modify(date_create($this->date), $value . ' year'));
	}
	
	// отнимает значение $value от года
	public function subYear($value) {
		$this->date = $this->format(date_modify(date_create($this->date), -$value . ' year'));
	}
	
	// выведет дату в указанном формате
	// формат пусть будет такой же, как в функции date
	public function format($format) {
		return date_format($format, 'Y-m-d');
	}
	
	// выведет дату в формате 'год-месяц-день'
	public function __toString() {
		return $this->getYear() . '-' . $this->getMonth() . '-' . $this->getDay();
	}
}

$date = new Date('2025-12-31');
echo $date->getYear() . '<p>';  // выведет '2025'
echo $date->getMonth() . '<p>'; // выведет '12'
echo $date->getDay('w') . '<p>';   // выведет '31'
echo $date->getWeekDay() . '<p>';     // выведет '3'
echo $date->getWeekDay('ru') . '<p>'; // выведет 'среда'
echo $date->getWeekDay('en') . '<p>'; // выведет 'wednesday'
$date->addDay(4);
$date->subDay(7);
$date->addMonth(4);
$date->subMonth(1);
$date->addYear(2);
$date->subYear(1);
var_dump($date);
echo $date1 = new Date('2023-07-12') . '<p>';
?>