<?php
include_once "includes/config.php";

$headers = array( 
	'Accept: application/json'
);

$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36';

/* Get rocket from the API put it in cache. We do the rocket once per month */

$url_rocket = 'https://launchlibrary.net/1.2/rocket/';

$path_rocket = "./cache/".md5("rocket".date("Y-m"));

if (file_exists($path_rocket)) 
{
	$rocket = file_get_contents($path_rocket);
	$rocket = json_decode($rocket);

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

	$rocket = json_decode($rocket);


	foreach($rocket->rockets as $_rocket){
		$prepare = $pdo->prepare("INSERT INTO rockets (name, image_url) VALUES(:name, :image_url)");
		$prepare->bindValue(":name", $_rocket->name);
		$prepare->bindValue(":image_url", $_rocket->imageURL);

		$prepare->execute();

	}
}

/* Get agency from the API put it in cache. We do the agency once per month */

$url_agency = 'https://launchlibrary.net/1.2/agency';

$path_agency = "./cache/".md5("agency".date("Y-m"));

if (file_exists($path_agency)) 
{
	$agency = file_get_contents($path_agency);
	$agency = json_decode($agency);
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

	$agency = json_decode($agency);

	foreach($agency->agencies as $_agency){
		$prepare = $pdo->prepare("INSERT INTO agency (name, abbrev) VALUES(:name, :abbrev)");
		$prepare->bindValue(":name", $_agency->name);
		$prepare->bindValue(":abbrev", $_agency->abbrev);

		$prepare->execute();
	}
}


/* Get mission from the API put it in cache. We do the mission once per month */

$url_mission = 'https://launchlibrary.net/1.2/mission';

$path_mission = "./cache/".md5("mission".date("Y-m"));

if (file_exists($path_mission)) 
{
	$mission = file_get_contents($path_mission);
	$mission = json_decode($mission);
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

	$mission = json_decode($mission);

	foreach($mission->missions as $_mission){
		$prepare = $pdo->prepare("INSERT INTO missions (name, description, id_agency) VALUES(:name, :description, :id_agency)");
		$prepare->bindValue(":name", $_mission->name);
		$prepare->bindValue(":description", $_mission->description);
		$prepare->bindValue(":id_agency", !empty($_mission->agencies)? $_mission->agencies[0]->id : 0);

		$prepare->execute();
	}
}

/* Get pad from the API put it in cache. We do the pad once per month */

$url_pad = 'https://launchlibrary.net/1.2/pad/';

$path_pad = "./cache/".md5("pad".date("Y-m"));

if (file_exists($path_pad)) 
{
	$pad = file_get_contents($path_pad);
	$pad = json_decode($pad);
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

	$pad = json_decode($pad);

	foreach($pad->pads as $_pad){
		$prepare = $pdo->prepare("INSERT INTO pads (name, latitude, longitude, id_agency, id_location) VALUES(:name, :latitude, :longitude, :id_agency, :id_location)");
		$prepare->bindValue(":name", $_pad->name);
		$prepare->bindValue(":latitude", $_pad->latitude);
		$prepare->bindValue(":longitude", $_pad->longitude);
		$prepare->bindValue(":id_location", $_pad->locationid);
		$prepare->bindValue(":id_agency", !empty($_pad->agencies)? $_pad->agencies[0]->id : 0);

		$prepare->execute();

		//	var_dump($_pad->latitude);
	}
}

/* Get location from the API put it in cache. We do the location once per month */

$url_location = 'https://launchlibrary.net/1.2/location';

$path_location = "./cache/".md5("location".date("Y-m"));

if (file_exists($path_location)) 
{
	$location = file_get_contents($path_location);
	$location = json_decode($location);
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

	$location = json_decode($location);

	foreach($location->locations as $_location){
		$prepare = $pdo->prepare("INSERT INTO locations (name, abbrev) VALUES(:name, :abbrev)");
		$prepare->bindValue(":name", $_location->name);
		$prepare->bindValue(":abbrev", $_location->countrycode);

		$prepare->execute();

	}
}

/* Get launch from the API put it in cache. We do the launch once per month */

$url_launch = 'https://launchlibrary.net/1.2/launch/';

$path_launch = "./cache/".md5("launch".date("Y-m"));

if (file_exists($path_launch)) 
{
	$launch = file_get_contents($path_launch);

	$launch = json_decode($launch);
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

	$launch = json_decode($launch);

	foreach($launch->launches as $_launch){
		$prepare = $pdo->prepare("INSERT INTO launches (name, time_start, time_end, id_status, id_pad, id_agency, id_rocket) VALUES(:name, :time_start, :time_end, :id_status, :id_pad, :id_agency, :id_rocket)");
		$prepare->bindValue(":name", $_launch->name);
		$prepare->bindValue(":time_start", $_launch->isostart);
		$prepare->bindValue(":time_end", $_launch->isoend);
		$prepare->bindValue(":id_status", $_launch->status); 
		$prepare->bindValue(":id_pad", $_launch->location->pads[0]->id);
		$prepare->bindValue(":id_agency", $_launch->location->pads[0]->agencies[0]->id); 
		$prepare->bindValue(":id_rocket", $_launch->rocket->id); 

		$prepare->execute();

	}
}


/* Get status from the API put it in cache. We do the status once per month */

$url_status = 'https://launchlibrary.net/1.2/launchstatus';

$path_status = "./cache/".md5("status".date("Y-m"));

if (file_exists($path_status)) 
{
	$status = file_get_contents($path_status);
	$status = json_decode($status);
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

	$status = json_decode($status);

	foreach($status->types as $_status){
		$prepare = $pdo->prepare("INSERT INTO status (name, description) VALUES(:name, :description)");
		$prepare->bindValue(":name", $_status->name);
		$prepare->bindValue(":description", $_status->description);

		$prepare->execute();

	}
}

$query = $pdo->prepare("SELECT * FROM launches, status WHERE launches.id_status = status.id");
$query->execute();
$result = $query->fetchAll();

echo "<pre>";
print_r($result);
echo "</pre>";

