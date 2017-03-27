<?php
include_once "config.php";

$headers = array( 
    'Accept: application/json'
);

$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36';

// Instantiate curl
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://launchlibrary.net/1.2/agency/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($curl, CURLOPT_USERAGENT, $ua);
$agency = curl_exec($curl);
curl_close($curl);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://launchlibrary.net/1.2/mission/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($curl, CURLOPT_USERAGENT, $ua);
$mission = curl_exec($curl);
curl_close($curl);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://launchlibrary.net/1.2/pad/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($curl, CURLOPT_USERAGENT, $ua);
$pad = curl_exec($curl);
curl_close($curl);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://launchlibrary.net/1.2/location/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($curl, CURLOPT_USERAGENT, $ua);
$location = curl_exec($curl);
curl_close($curl);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://launchlibrary.net/1.2/rocket/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($curl, CURLOPT_USERAGENT, $ua);
$rocket = curl_exec($curl);
curl_close($curl);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://launchlibrary.net/1.2/launch/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($curl, CURLOPT_USERAGENT, $ua);
$launch = curl_exec($curl);
curl_close($curl);

// Json decode
$agency = json_decode($agency);
$mission = json_decode($mission);
$pad = json_decode($pad);
$location = json_decode($location);
$rocket = json_decode($rocket);
$launch = json_decode($launch);

// Show result
echo '<pre>';
print_r($agency);
print_r($mission);
print_r($pad);
print_r($location);
print_r($rocket);
print_r($launch);
echo '</pre>';