<?php
/**
 * Created by IntelliJ IDEA.
 * User: hiroshi sumida
 * Date: 2014/03/01
 * Time: 14:53
 * To change this template use File | Settings | File Templates.
 */
echo (memory_get_usage() / 1000) . "KB\n";
echo (memory_get_usage(true) / 1000) . "KB\n";
echo '---'."\n";
/*
$a = null;
for($i = 0; $i < 1000; $i++){
	$a .= 'aaaa';
}
*/
$date = new DateTime('Asia/Tokyo');
echo (memory_get_usage() / 1000) . "KB\n";
echo (memory_get_usage(true) / 1000) . "KB\n";
echo '---'."\n";
unset($date);
echo (memory_get_usage() / 1000) . "KB\n";
echo (memory_get_usage(true) / 1000) . "KB\n";
