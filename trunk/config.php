<?php
$dhost = "localhost"; //usually localhost, or ip
$dusername = "root"; // database user
$dpassword = ""; // database pass
$ddatabase = "aq"; // database name

$con = mysql_connect($dhost, $dusername, $dpassword) or die("Cannot Connect"); 
mysql_select_db($ddatabase, $con);
?>