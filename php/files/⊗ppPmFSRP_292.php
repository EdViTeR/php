<?php

// №1
echo file_get_contents('dir1/dir2/test.txt');

// №2
echo file_get_contents('../dir1/dir2/test.txt');

// №3
echo file_get_contents('../../dir/test.txt');

// №4
echo file_get_contents('../../../dir1/dir2/dir3/test.txt');