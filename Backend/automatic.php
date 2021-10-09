<?php

//if (isset($_POST['send'])){
	$ip = "199.168.131.18";
	$port = "8181";
	$url= $_POST['url'];
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_PROXY, $ip);
	curl_setopt($ch, CURLOPT_PROXYPORT, $port);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION , 1);
	$response = curl_exec($ch);
	curl_close($ch);
//}
