<?php
header("Content-type: application/json");
$address = $_GET['address'];
$count  = $_GET['count'];
$size = $_GET['size'];
$size = $size-8;
$result = shell_exec("ping -c $count -s $size $address");
$ping = [];
// times
if(preg_match_all("/time=(\d+(\.\d+)?)/", $result,$times))
	$ping['times'] = $times[1];
//ip
if(preg_match("/(\d+\.){3}\d+/", $result,$ip))
	$ping['ip'] = $ip[0];
//size
// if(preg_match("/\n(\d+) bytes/", $result,$size))
// 	$ping['size'] = $size[1];
//stats
$ping['stats'] = [];
if(preg_match("/ (\d+) received/", $result,$received))
	$ping['stats']['received'] = $received[1];
if(preg_match("/time (\d+)ms/", $result,$time))
	$ping['stats']['time'] = $time[1];
echo json_encode($ping);