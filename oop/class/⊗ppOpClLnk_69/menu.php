<?php
require_once 'Link.php';

// №3
for ($i=1; $i < 6; $i++) { 
	echo "<li>" . (new Link())->setAttr('href', $i . '.php')->setText($i)->show() . "</li>";
}
?>