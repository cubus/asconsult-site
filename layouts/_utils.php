<?php
date_default_timezone_set('Europe/Bucharest');
$since = new DateTime("2004-01-01");
$today = new DateTime();
$interval  = $today->diff($since);