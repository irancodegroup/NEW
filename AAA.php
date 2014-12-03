<?php
$username = 'madahan';
$password = '123456';
$number = '+9850002040108480';
$msg = "Host is Down";

// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://185.4.28.180/class/sms/webservice/send_url.php?from=$number&to=09393687725&msg=$msg&uname=$username&pass=$password");
curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);

?>