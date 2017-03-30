var all_agency = [];
var all_agency_id = [];
//console.log(agency[0]);
//console.log(countries[0]);
//console.log(launches[0]);
//console.log(missions[0].mission_id_agency);
//console.log(pads[0]);
//console.log(rockets[0]);
//console.log(status);

var agency_stats = function(agency, locations, launches, launches_pad, missions, rockets, pads){
	this.id = agency.agency_id;
	this.name = agency.agency_name;
	this.abbrev = agency.agency_abbrev;
	this.pads = pads;
	this.pads_location = locations; //pads locations
	this.pads_launches = launches_pad; //launches per agenie's pads
	this.launches = launches; //launches per agency
	this.misisons = missions;
	this.rockets = rockets;

	this.show_console = function(){
		console.log(this);
	}
}

for(var i = 0; i < agency.length; i++)
{
	var agency_current = agency[i];
	var agency_current_missions = getmissions(agency_current.agency_id, missions);
	var agency_current_pads = getpads(agency_current.agency_id, pads);
	var agency_current_pads_location = getlocations(agency_current_pads, countries);
	var agency_current_pads_launches = getpadslaunches(agency_current_pads, launches); //launches per agenie's pads
	var agency_current_launches = getlaunches(agency_current.agency_id, launches); //launches per agency
	var agency_current_launches_rockets = getrockets(agency_current_launches, rockets, []);
	agency_current_launches_rockets = getrockets(agency_current_pads_launches, rockets, agency_current_launches_rockets);
	
var current_name = agency[i].agency_id;
	all_agency[current_name] = new agency_stats(agency_current, agency_current_pads_location, agency_current_launches, agency_current_pads_launches, agency_current_missions, agency_current_launches_rockets, agency_current_pads);
//	all_agency["id_"+agency[i]].show_console();
	
	all_agency_id[i] = agency[i].agency_id;
}
console.log(all_agency[all_agency_id[30]]);
console.log(all_agency_id);
console.log(all_agency_id.length);

//Retrieves all missions that have the same id_agency has the current agency
function getmissions(agency_id, mission_array)
{
	var current_agency_missions = [];
	for(var i = 0; i < mission_array.length; i++)
	{
		if(missions[i].mission_id_agency == agency_id) current_agency_missions.push(missions[i]);
	}
	return current_agency_missions;
}

//Retrieves all pads that have the same id_agency has the current agency
function getpads(agency_id, pad_array)
{
	var current_agency_pads = [];
	for(var i = 0; i < pad_array.length; i++)
	{
		if(pads[i].pad_id_agency == agency_id) current_agency_pads.push(pads[i]);
	}

	// If there are more than one of same sample of a pad we remove extra cell
	for(var j = 0; j < current_agency_pads.length; j++)  
	{
		for(var k = j+1; k < current_agency_pads.length; k++)
		{
			if(current_agency_pads[j].pad_id_agency == current_agency_pads[k].pad_id_agency) current_agency_pads.splice(k, 1);
		}
	}
	return current_agency_pads;
}

//Retrieves all location that have the same id_location has the current pad_location
function getlocations(pad, location_array)
{
	var current_pad_location = [];
	for(var i = 0; i < pad.length; i++)
	{
		for(var j = 0; j < location_array.length; j++)
		{
			if(location_array[j].location_id == pad[i].pad_id_location) current_pad_location.push(location_array[i]);
		}
	}
	return current_pad_location;
}

//Retrieves all launches that have the same id_pad has the current pad_id
function getpadslaunches(pad, launches_array)
{
	var current_pad_launches = [];
	for(var i = 0; i < pad.length; i++)
	{
		for(var j = 0; j < launches_array.length; j++)
		{
			if(launches_array[j].launche_id == pad[i].pad_id_location) current_pad_launches.push(launches_array[i]);
		}
	}
	return current_pad_launches;
}

//Retrieves all launches that have the same id_agency has the current agency_id
function getlaunches(agency_id, launches_array)
{
	var current_launches = [];

	for(var i = 0; i < launches_array.length; i++)
	{
		if(launches_array[i].launche_id_agency == agency_id) current_launches.push(launches_array[i]);
	}

	return current_launches;
}

function getrockets(launches, rocket_array, current_launches_rockets)
{
	for(var i = 0; i < launches.length; i++)
	{
		for(var j = 0; j < rocket_array.length; j++)
		{
			if(rocket_array[j].rocket_id == launches[i].launche_id_rocket) current_launches_rockets.push(rocket_array[i]);
		}
	}
	//	return current_launches_rockets;
	return current_launches_rockets;
}