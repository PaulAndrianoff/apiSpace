<?php
include_once "config.php";

$headers = array( 
    'Accept: application/json'
);

$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36';

// Show result
/*echo '<pre>';
print_r($agency);
print_r($mission);
print_r($pad);
print_r($location);
print_r($rocket->id);
print_r($launch);
echo '</pre>';*/

/* Get rocket from the API put it in cache. We do the rocket once per month */

$url_rocket = 'https://launchlibrary.net/1.2/rocket/';

$path_rocket = "./cache/".md5("rocket".date("Y-m"));

if (file_exists($path_rocket)) 
{
	$rocket = file_get_contents($path_rocket);
}
else
{
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url_rocket);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt($curl, CURLOPT_USERAGENT, $ua);
	$rocket = curl_exec($curl);
	curl_close($curl);
	file_put_contents($path_rocket, $rocket);
}
	$rocket = json_decode($rocket);

	/* Get agency from the API put it in cache. We do the agency once per month */

	$url_agency = 'https://launchlibrary.net/1.2/agency';

	$path_agency = "./cache/".md5("agency".date("Y-m"));

if (file_exists($path_agency)) 
{
	$agency = file_get_contents($path_agency);
}
else
{
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url_agency);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt($curl, CURLOPT_USERAGENT, $ua);
	$agency = curl_exec($curl);
	curl_close($curl);
	file_put_contents($path_agency, $agency);
}
	$agency = json_decode($agency);

	/* Get mission from the API put it in cache. We do the mission once per month */
	
	$url_mission = 'https://launchlibrary.net/1.2/mission';

	$path_mission = "./cache/".md5("mission".date("Y-m"));

if (file_exists($path_mission)) 
{
	$mission = file_get_contents($path_mission);
}
else
{
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url_mission);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt($curl, CURLOPT_USERAGENT, $ua);
	$mission = curl_exec($curl);
	curl_close($curl);
	file_put_contents($path_mission, $mission);
}
	$mission = json_decode($mission);

	/* Get pad from the API put it in cache. We do the pad once per month */
	
	$url_pad = 'https://launchlibrary.net/1.2/pad';

	$path_pad = "./cache/".md5("pad".date("Y-m"));

if (file_exists($path_pad)) 
{
	$pad = file_get_contents($path_pad);
}
else
{
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url_pad);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt($curl, CURLOPT_USERAGENT, $ua);
	$pad = curl_exec($curl);
	curl_close($curl);
	file_put_contents($path_pad, $pad);
}
	$pad = json_decode($pad);

	/* Get location from the API put it in cache. We do the location once per month */
	
	$url_location = 'https://launchlibrary.net/1.2/location';

	$path_location = "./cache/".md5("location".date("Y-m"));

if (file_exists($path_location)) 
{
	$location = file_get_contents($path_location);
}
else
{
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url_location);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt($curl, CURLOPT_USERAGENT, $ua);
	$location = curl_exec($curl);
	curl_close($curl);
	file_put_contents($path_location, $location);
}
	$location = json_decode($location);

	/* Get launch from the API put it in cache. We do the launch once per month */
	
	$url_launch = 'https://launchlibrary.net/1.2/launch';

	$path_launch = "./cache/".md5("launch".date("Y-m"));

if (file_exists($path_launch)) 
{
	$launch = file_get_contents($path_launch);
}
else
{
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url_launch);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt($curl, CURLOPT_USERAGENT, $ua);
	$launch = curl_exec($curl);
	curl_close($curl);
	file_put_contents($path_launch, $launch);
}
	$launch = json_decode($launch);

	/* Get status from the API put it in cache. We do the status once per month */

$url_status = 'https://launchlibrary.net/1.2/launchstatus';

$path_status = "./cache/".md5("status".date("Y-m"));

if (file_exists($path_status)) 
{
	$status = file_get_contents($path_status);
}
else
{
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url_status);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt($curl, CURLOPT_USERAGENT, $ua);
	$status = curl_exec($curl);
	curl_close($curl);
	file_put_contents($path_status, $status);
}
	$status = json_decode($status);

?>

<?php foreach($rocket->rockets as $_rocket): ?>

<div>
<?= $_rocket-> name; ?>
</div> 

<?php endforeach; ?>
