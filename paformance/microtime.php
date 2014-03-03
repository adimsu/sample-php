<?php
/**
 * Created by IntelliJ IDEA.
 * User: hiro
 * Date: 2014/02/21
 * Time: 2:15
 * To change this template use File | Settings | File Templates.
 */
$tmp = array();
for($i=0; $i==1000000000; $i++){
	$tmp[] = rand(0, 1);
}


$time_start = microtime(true);
foreach($tmp as $value){
	$sample = $value;
}
$time_end = microtime(true);
$type1 = ($time_end - $time_start)*1000;

/*
$time_start = microtime(true);
foreach($tmp as &$value){
	$sample = $value;
}
$time_end = microtime(true);
$type1 = ($time_end - $time_start)*1000;
*/

echo $type1." ms\n";
//echo $type2." ms\n";