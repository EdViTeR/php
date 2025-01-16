<?php

for ($i=1; $i < 6; $i++) { 
	copy('file.txt', 'copy/' . $i . '.txt');
}