<?php
$server="localhost";
$database="mastravel";
$dbpass="toor";
$dbuser="root";
/*$server="localhost";
$database="mastrave_cm";
$dbpass="@ppDT2016.";
$dbuser="mastrave_root";*/

$link=mysql_connect($server,$dbuser,$dbpass);
mysql_select_db($database,$link);
?>