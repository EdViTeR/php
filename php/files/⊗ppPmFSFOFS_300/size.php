<?php

// №1
echo filesize('1.txt') . ' байт<p>';
// №2
echo filesize('1.txt') / 1024 . ' килобайт<p>';
// №3
echo filesize('1.txt') / (1024*1024) . ' мегабайт<p>';
// №4
echo filesize('1.txt') / (1024*1024*1024) . ' гигабайт<p>';