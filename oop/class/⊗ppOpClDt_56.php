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
	
	// возвращает месяц
	public function getMonth($lang = null) {
		// переменная $lang может принимать значение ru или en
		// если эта не пуста - пусть месяц будет словом на заданном языке 
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
		$this->date = date("Y-m-d", strtotime($this->date)+60*60*24*$value);
	}
	
	public function subDay($value) {
		$this->date = date("Y-m-d", strtotime($this->date)-60*60*24*$value);
	}
	
	public function addMonth($value) {
		$this->date = date('Y-m-d', strtotime('+' . $value . ' MONTH', strtotime($this->date)));
	}
	
	// отнимает значение $value от месяца
	public function subMonth($value) {
		$this->date = date('Y-m-d', strtotime('-' . $value . ' MONTH', strtotime($this->date)));
	}
	
	public function addYear($value) {
		$this->date = date('Y-m-d', strtotime('+' . $value . ' YEAR', strtotime($this->date)));
	}
	
	// отнимает значение $value от года
	public function subYear($value) {
		$this->date = date('Y-m-d', strtotime('+' . $value . ' YEAR', strtotime($this->date)));
	}
	
	// выведет дату в указанном формате
	// формат пусть будет такой же, как в функции date
	public function format($format) {
		return date($format, strtotime($this->date));
	}
	
	// выведет дату в формате 'год-месяц-день'
	public function __toString() {
		return $this->getYear() . '-' . $this->getMonth() . '-' . $this->getDay();
	}
}

$date = new Date('2025-06-31');
echo $date->getYear() . '<p>';  // выведет '2025'
echo $date->getMonth('en') . '<p>'; // выведет '12'
echo $date->getDay('w') . '<p>';   // выведет '31'

echo $date->getWeekDay() . '<p>';     // выведет '3'
echo $date->getWeekDay('ru') . '<p>'; // выведет 'среда'
echo $date->getWeekDay('en') . '<p>'; // выведет 'wednesday'
echo $date->addDay('2') . '<p>';
echo $date->getWeekDay() . '<p>'; 
echo $date->subDay('4') . '<p>';
echo $date->addMonth('2') . '<p>';
echo $date->subMonth('4') . '<p>';
echo $date->getMonth() . '<p>'; // выведет '12'
echo $date->addYear(2) . '<p>'; // выведет '12'
echo $date->getYear() . '<p>';  // выведет '2025'
echo $date1 = new Date('2023-07-12') . '<p>';
echo $date->format('Y.m.d');
?>