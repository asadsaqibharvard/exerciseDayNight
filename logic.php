<?php
#set the timezone
date_default_timezone_set('America/New_York');

#set hours as military time 0-23
$hour = date("G");

#test code manually
//$hour = 1;

#if hours is before 6am or after 8pm the variable $body_class will be night
if($hour < 6 || $hour > 20){
	$body_class = "night";
}
else {
	$body_class = "day";
}

?>