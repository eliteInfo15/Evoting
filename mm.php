<?php
$date = new DateTime('2000-01-01');
$date->add(new DateInterval('P2Y'));
$mydate= $date->format('Y-m-d');
echo $mydate;
?>