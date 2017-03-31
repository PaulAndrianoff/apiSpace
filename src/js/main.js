var all_agency = []; // associative array in wich all agency will be stocke in
var all_agency_id = []; // array in wich all agency_id will be stocke in
var current_section = 1; // this permit to permut section in wich data will appear
var current_agency = ""; // stocke current country agency_id

var launches_total = launches.length; //all launches in totals
var pads_total = pads.length; //all pads in totals
var missions_total = missions.length; //all collaborations in totals
var collaboration_total = getCollaborations();

// Function to retrieve all collaboration
function getCollaborations(){
	var collaboration = 0;
	for(var i = 0; i < agency.length; i++)
	{
		collaboration += parseInt(agency[i].agency_collaboration);
	}
	return collaboration;
}

var section_one = document.querySelector(".agency.agency-one"); // section top
var section_two = document.querySelector(".agency.agency-two"); // section bottom
var graph_one = document.querySelectorAll(".agency.agency-one .graph-section1"); // all graphes in section top
var graph_two = document.querySelectorAll(".agency.agency-two .graph-section2"); // all graphes in section bottom
 
// creation Class of agency
var agency_stats = function(agency, locations, launches, launches_pad, missions, rockets, pads){
	this.id = agency.agency_id;
	this.name = agency.agency_name;
	this.creation = agency.agency_creation_year;
	this.budget = agency.agency_budget;
	this.collaboration = agency.agency_collaboration;
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

//Find if a value is present in an array
function present_in_array(value, array)
{
	for (var i=0; i<array.length; i++)
	{
		if (array[i].match(value))
		{
			return true;
		}
	}

	return false;
}

//Function to show current agency informations and relatives graph
function show_current_agency(id)
{
	if(id != current_agency)
	{
		current_agency = id;
		var text_agency_info = "";
		if(current_section == 1)
		{
			if(present_in_array(id, all_agency_id))
			{
				text_agency_info = "<h3 class='title_agence'>" + all_agency[id].abbrev + "</h3>" +
					"<div class='agency-name'><p>Name : " + all_agency[id].name + "</p></div>" +
					"<div class='creation-date'><p>Date of creation : " + all_agency[id].creation + "</p></div>" +
					"<div class='creation-date'><p>Annual budget : " + (all_agency[id].budget == 0 ? "UNKNOW" : all_agency[id].budget + " millions $") + "</p></div>" +
					"<div class='missions-number'><p>Mission number : " + all_agency[id].misisons.length + "</p></div>" +
					"<div class='pad-name'><p>Pad number : " + all_agency[id].pads.length + "</p></div>" +
					"<div class='number-rocket-sent'>Number of launched : " + all_agency[id].launches.length + "</div>";

				section_one.querySelector(".description-agency").innerHTML = text_agency_info;

				//Graph of local launches
				var launches_local = 0;
				if(all_agency[id].launches.length > 0)
				{
					var launches_local = all_agency[id].launches.length / (all_agency[id].launches.length + all_agency[id].pads_launches.length);
				}
				launches_local = launches_local.toFixed(2);

				graph_one[0].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + launches_local + ")";
				graph_one[0].querySelector(".graphic-agency-title").innerHTML = all_agency[id].launches.length + " out of " + (all_agency[id].launches.length + all_agency[id].pads_launches.length) + " : local_launches";
 + "local_launches";

				//Graph of local pads
				var pads_local = all_agency[id].pads.length / pads_total;
				pads_local = pads_local.toFixed(2);
				var pads_purcent = pads_local*100;

				graph_one[1].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + pads_local + ")";
				graph_one[1].querySelector(".graphic-agency-title").innerHTML = all_agency[id].pads.length + " out of " + pads_total + " : pads in the world";

				//Graph of missions
				var mission_int = all_agency[id].misisons.length / missions_total;
				mission_int = mission_int.toFixed(2);

				graph_one[2].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + mission_int + ")";
				graph_one[2].querySelector(".graphic-agency-title").innerHTML = all_agency[id].misisons.length + " out of " + missions_total + " : all missions in the world";

				//Graph of collaborations
				var collaboration_int = parseInt(all_agency[id].collaboration)/ collaboration_total;
				collaboration_int = collaboration_int.toFixed(2);

				graph_one[3].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + collaboration_int + ")";
				graph_one[3].querySelector(".graphic-agency-title").innerHTML = parseInt(all_agency[id].collaboration) + " out of " + collaboration_total + " : all collaborations in the world";
			}
			else
			{
				//If No datas about this country
				text_agency_info += "<h3 class='title_agence'>No datas about this country</h3>";
				section_one.querySelector(".description-agency").innerHTML = text_agency_info;

				graph_two[0].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + 0 + ")";
				graph_two[0].querySelector(".graphic-agency-title").innerHTML = "0 out of UNKNOW : local_launches";

				graph_two[1].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + 0 + ")";
				graph_two[1].querySelector(".graphic-agency-title").innerHTML = "0 out of " + pads_total + "all pads in the world";

				graph_two[2].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + 0 + ")";
				graph_two[2].querySelector(".graphic-agency-title").innerHTML = "0 out of " + missions_total + "all missions in the world";

				graph_two[3].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + 0 + ")";
				graph_two[3].querySelector(".graphic-agency-title").innerHTML = "0 out of " + collaboration_total + "all collaborations in the world";
			}
			current_section = 2;
		}
		else
		{
			if(present_in_array(id, all_agency_id))
			{
				text_agency_info = "<h3 class='title_agence'>" + all_agency[id].abbrev + "</h3>" +
					"<div class='agency-name'><p>Name : " + all_agency[id].name + "</p></div>" +
					"<div class='creation-date'><p>Date of creation : " + all_agency[id].creation + "</p></div>" +
					"<div class='creation-date'><p>Annual budget : " + (all_agency[id].budget == 0 ? "UNKNOW" : all_agency[id].budget + " millions $") + "</p></div>" +
					"<div class='missions-number'><p>Mission number : " + all_agency[id].misisons.length + "</p></div>" +
					"<div class='pad-name'><p>Pad number : " + all_agency[id].pads.length + "</p></div>" +
					"<div class='number-rocket-sent'>Number of launched : " + all_agency[id].launches.length + "</div>";
				section_two.querySelector(".description-agency").innerHTML = text_agency_info;

				var launches_local = 0;
				if(all_agency[id].launches.length > 0)
				{
					//Graph of local launches
					var launches_local = all_agency[id].launches.length / (all_agency[id].launches.length + all_agency[id].pads_launches.length);
				}
				launches_local = launches_local.toFixed(2);

				graph_two[0].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + launches_local + ")";
				graph_two[0].querySelector(".graphic-agency-title").innerHTML = all_agency[id].launches.length + " out of " + (all_agency[id].launches.length + all_agency[id].pads_launches.length) + " : local_launches";
 + "local_launches";

				//Graph of local pads
				var pads_local = all_agency[id].pads.length / pads_total;
				pads_local = pads_local.toFixed(2);
				var pads_purcent = pads_local*100;

				graph_two[1].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + pads_local + ")";
				graph_two[1].querySelector(".graphic-agency-title").innerHTML = all_agency[id].pads.length + " out of " + pads_total + " : pads in the world";

				//Graph of missions
				var mission_int = all_agency[id].misisons.length / missions_total;
				mission_int = mission_int.toFixed(2);

				graph_two[2].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + mission_int + ")";
				graph_two[2].querySelector(".graphic-agency-title").innerHTML = all_agency[id].misisons.length + " out of " + missions_total + " : all missions in the world";

				//Graph of collaborations
				var collaboration_int = parseInt(all_agency[id].collaboration)/ collaboration_total;
				collaboration_int = collaboration_int.toFixed(2);

				graph_two[3].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + collaboration_int + ")";
				graph_two[3].querySelector(".graphic-agency-title").innerHTML = parseInt(all_agency[id].collaboration) + " out of " + collaboration_total + " : all collaborations in the world";
			}
			else
			{
				//If No datas about this country
				text_agency_info += "<h3 class='title_agence'>No datas about this country</h3>";
				section_two.querySelector(".description-agency").innerHTML = text_agency_info;

				graph_two[0].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + 0 + ")";
				graph_two[0].querySelector(".graphic-agency-title").innerHTML = "0 out of UNKNOW : local_launches";

				graph_two[1].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + 0 + ")";
				graph_two[1].querySelector(".graphic-agency-title").innerHTML = "0 out of " + pads_total + "all pads in the world";

				graph_two[2].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + 0 + ")";
				graph_two[2].querySelector(".graphic-agency-title").innerHTML = "0 out of " + missions_total + "all missions in the world";

				graph_two[3].querySelector(".graphic-agency-current-purcent").style = "transform: scaleX(" + 0 + ")";
				graph_two[3].querySelector(".graphic-agency-title").innerHTML = "0 out of " + collaboration_total + "all collaborations in the world";
			}
			current_section = 1;
		}
	}
}

// Create all agencies object and stock them in all_agency 
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

	all_agency_id[i] = agency[i].agency_id;
}

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
