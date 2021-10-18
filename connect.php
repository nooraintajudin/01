<?php

$mysql_host = 'localhost';
$mysql_user = 'sgtrave1_person';
$mysql_pass = 'fakhari88';

$mysql_db = 'sgtrave1_user';

if (!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db)){
die(mysql_error());
}

?>