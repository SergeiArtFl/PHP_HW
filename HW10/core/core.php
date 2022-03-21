<?php

$iniData = parse_ini_file("core.ini");

$mysqli = mysqli_connect($iniData['host'], $iniData['user'], $iniData['pass'], $iniData['db']);