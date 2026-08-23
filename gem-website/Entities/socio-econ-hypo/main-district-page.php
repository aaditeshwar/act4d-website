<!DOCTYPE html>
<html>
<head>
	<title>Salient Information on Anantapur, Andhra Pradesh</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="library/material_design_table.js"></script>
<link rel="stylesheet" type="text/css" href="library/material_design_table.css">

<script src="https://d3js.org/d3.v4.js"></script>
<script type="text/javascript" src="library/plotly-latest.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" type="text/css" href="../../library/leaflet/leaflet.css">
<script src="dists.json"></script>

<script type="text/javascript" src="../../library/leaflet/leaflet.js"></script>
<script src="../../library/leaflet/leaflet.hotline.js"></script>
<script src="../../GeoJSON_Files/main1.trimmed.geojson"></script>




<style type="text/css">
	body {
	    /*font-family: 'Open Sans', 'serif';*/
	    /*font-size: 22px;*/
	}
	#navID ul li ul {
		max-height: 300px;
		font-family: 'Montserrat', 'serif';
		font-size: 14px;
		z-index: 10000;
		/* you can change as you need it */
		/* to get scroll */
		/*background: blue;*/
		color: #05386b !important;
		background: #b8ffcb;
		text-align: center;

	}

	#navID ul li ul li a:hover {
		z-index: 10000;
		/* you can change as you need it */
		/* to get scroll */
		/*background: blue;*/
		font-family: 'Montserrat', 'serif';
		font-size: 14px;
		background: #5cdb95;

		color: #05386b !important;
		text-align: center;
		letter-spacing: 0.5px;

	}

	#navID ul li a {

		font-family: 'Montserrat', 'serif';
		font-size: 14px;
		/* you can change as you need it */
		/* to get scroll */
		/*background: blue;*/
		color: #05386b !important;
	}
	
	#map { 
		height: 500px;
		width: 500px;
	 }
	 #main-table {
		margin: auto;
	 }
	.info {
		padding: 6px 8px;
		font: 14px/16px Arial, Helvetica, sans-serif;
		background: white;
		background: rgba(255,255,255,0.8);
		box-shadow: 0 0 15px rgba(0,0,0,0.2);
		border-radius: 5px;
	}
	.info h4 {
		margin: 0 0 5px;
		color: #777;
	}
	.info h6 {
		margin: 0 0 2px;
		color: #777;
	}
	.faqHeader {
		font-size: 27px;
		margin: 20px;
	}
	h1 {
		margin: 15px auto;
		text-align: center;
	}
	h4 {
		margin: 10px auto;
		text-align: center;
	}

	.one {
		width: 100%;
		height: 180px;
		color: #05386b !important;
		background: #4FA543 !important;
	}

	.two {
		background: #4FA543 !important;
		width: 100%;
		height: 70px;
		color: #05386b !important;
	}


	.panel-heading [data-toggle="collapse"]:after {
		font-family: 'Glyphicons Halflings';
		content: "\e072"; /*glyphicon glyphicon-chevron-righe072" "play" icon */
		float: right;
		color: #F58723;
		font-size: 18px;
		line-height: 22px;
		/* rotate "play" icon from > (right arrow) to down arrow */
		-webkit-transform: rotate(-90deg);
		-moz-transform: rotate(-90deg);
		-ms-transform: rotate(-90deg);
		-o-transform: rotate(-90deg);
		transform: rotate(-90deg);
	}

	.panel-heading [data-toggle="collapse"].collapsed:after {
		/* rotate "play" icon from > (right arrow) to ^ (up arrow) */
		-webkit-transform: rotate(90deg);
		-moz-transform: rotate(90deg);
		-ms-transform: rotate(90deg);
		-o-transform: rotate(90deg);
		transform: rotate(90deg);
		color: #454444;
	}
</style>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<script>
	$(function () {
		$("#header").load("header.html");
		$("#footer").load("footer.html");
	});
</script>

<body>
<div id="header"></div>
<section class="w3-container w3-center" style="max-width:2000px">
</section> 

<!-- Navigation -->
<nav class="navbar navbar-inverse header" id="navID">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Hypothesis 1<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="hypo-1-bf.html">BF</a></li>
					<li><a href="hypo-1-fc.html">FC</a></li>
					<li><a href="hypo-1-chh.html">CHH</a></li>
					<li><a href="hypo-1-msl.html">MSL</a></li>
					<li><a href="hypo-1-msw.html">MSW</a></li>
					<li><a href="hypo-1-asset.html">ASSET</a></li>
				</ul>
			</li>
			<li><a href="hypo-2.html">Hypothesis 2</a></li>
			<li><a href="hypo-3.html">Hypothesis 3</a></li>
			<li><a href="hypo-4.html">Hypothesis 4</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Hypothesis 5<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="hypo-5-bf.html">BF</a></li>
					<li><a href="hypo-5-fc.html">FC</a></li>
					<li><a href="hypo-5-chh.html">CHH</a></li>
					<li><a href="hypo-5-msl.html">MSL</a></li>
					<li><a href="hypo-5-msw.html">MSW</a></li>
					<li><a href="hypo-5-asset.html">ASSET</a></li>
				</ul>
			</li>
			<li><a href="hypo-6.html">Hypothesis 6</a></li>
			<li><a href="list-of-districts.php">List of Districts</a></li>
			<!-- <li><a href="future-pred.html">Satellite-Based Prediction</a></li> -->
			</li>
		</ul>
	</div>
</nav> 

<?php
	include_once 'connect-to-server.php';

	$censuscode = isset($_GET['censuscode']) ? intval($_GET['censuscode']) : 0;
	$row = gem_district_by_code($censuscode);
?>

<h1 style="text-align: center;color: #05386b !important;">Salient Information on District <?php echo ucwords($row['District_name'] ?? ''); ?>, <?php echo ucwords(strtolower($row['State_name'] ?? '')); ?> </h1>

<div class="container" style="margin-top: 40px;">
	<div class="row">
		<table>
			<tr>
				<td style="width: 200px;">
				</td>
				<td>
					<div class="col-5" id="dist_map1" style="height: 250px; width: 250px;">
				</td>
				<td style="width: 200px;"></td>
				<td style="width: 300px; border-style: solid; border-width: 1px; 
				background-color: #33cc33; color: white;padding-left: 20px"> 
				<div id="info_dist">			
					<p><strong>Population: </strong> <?php echo $row['TOT_P_2011'] ?? '';?></p>
					<p><strong>Aggregate Development Index: </strong> </p>
					<p id="adi_2001"><b>ADI(2001): </b> </p>
					<p id="adi_2011"><b>ADI(2011): </b> </p>
					<p id="adi_2019"><b>ADI(2019): </b> </p>
					<p id="emp"><b>Employment Type: </b></p>
				</div>
				<div id="no-info" style="display: none; text-align: center;">
					DATA NOT AVAILABLE
				</div>
				</td>
			</tr>
		</table>
	</div>
	<hr>
	<div class="row" id="mydisp">
		<h2 style="text-align: center;">News Articles</h2>
		<div class="container">
			<div style="margin-top: 30px;"></div>
			<div class="row" style="display: flex; flex-wrap: wrap;">
				<div class="col-md-6" id="tst" style="display: flex; flex-direction: column; padding: 20px;"></div>
				<div class="col-md-6" style="padding: 20px; background-color: #5cdb95; display: flex; flex-direction: column;">
					This section displays significant articles (upto 6) that agree with the subclass of the district over a period of past 100 days. These articles provide information that is being covered in newspapers recently which may explain why a particular district has higher or lower pace of growth and employment type. For this purpose, the article is first classified into one of the five themes (Agriculture, Industrialization, Environment, Development, Lifestyle). Using DocTag2Vec model, vector for each article is inferred and ratio of cosine similarities between the subclasses is used to classify article to a subclass based on highest relevance score. If the subclass of district (to which article belongs) and article matches, then the article belongs to this district. Click on the article to read complete news. 
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	const mydist_news = dist_news[<?php echo $_GET['censuscode']?>];
	console.log(mydist_news);
	if(!mydist_news || mydist_news.length <= 0) {
		document.getElementById("mydisp").style.display = "none";
	} else {
		var string_res = "";
		for(let i=0;i<mydist_news.length;i++) {
			var curr_art = mydist_news[i];
			var tags = [curr_art.publishedDate,curr_art.sourceName,curr_art.art_subclass];
			var color = "green";
			if(curr_art.art_subclass.includes("slow")) color = "red";
			if(curr_art.art_subclass.includes("avg")) color = "yellow";
			var tool_string = "Relevance Score: " + (curr_art.met_score*100);
			string_res += "<div class=\"row\">";
			string_res += "<p>";
			string_res += "<span class=\"dot\" style=\"background-color: "+ color + "; height: 10px;width: 10px;border-radius: 50%; display: inline-block;margin-top: 10px;\"></span>&nbsp;";
			string_res += "<a href=\"" + curr_art.articleUrl + "\" title=\"" + tool_string + "\">" + curr_art.articleTitle + "</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			for(let j=0;j<tags.length;j++) {
				string_res += "<span class=\"badge badge-pill badge-primary\">"+tags[j]+"</span>&nbsp;";
			}
			string_res += "</p></div>";
		}
		document.getElementById("tst").innerHTML = string_res;
	}
</script>
<script>
	function my_style(feature) {
					return {
						weight: 0.5,
						opacity: 1,
						color: 'white',
						dashArray: '3',
						fillOpacity: 0.7
					};
				}
	var idx = '<?php echo $_GET['censuscode']; ?>' ;
	// console.log(india_districts["features"][idx]);
	var curr_dist = india_districts["features"][idx];
	// document.getElementById('test1').innerHTML = curr_dist['properties']['DISTRICT'];
	var dist_map = L.map('dist_map1',{});

	var dist_layer = L.geoJson(curr_dist, {style: my_style}).addTo(dist_map);
	dist_map.fitBounds(dist_layer.getBounds());
	dist_map.setZoom(8);
	document.getElementById('adi_2001').innerHTML += curr_dist["properties"]["adi_2001"];
	document.getElementById('adi_2011').innerHTML += curr_dist["properties"]["adi_2011"];
	document.getElementById('adi_2019').innerHTML += curr_dist["properties"]["adi_2019"];

	var emp = curr_dist["properties"]["emp_2011"];
	if(emp == 1.0) emp = 'Others';
	else if(emp == 2.0) emp = 'Agri';
	else emp = 'Non-Agri';
	document.getElementById('emp').innerHTML += emp;

	if(curr_dist["properties"]["Available"] == 0) {
		document.getElementById('no-info').style.display = "inline-block";
		document.getElementById('info_dist').style.display = "none";
	}
</script>

<!-- <div id="demo4">
	<div class="table-responsive-vertical shadow-z-1">
		<table id="table" class="table table-hover table-mc-indigo">
			<thead>
				<tr>
					<th>2001 Population</th>
					<th>2011 Population</th>
					<th>Male Population</th>
					<th>Female Population</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td data-title="ID">100000</td>
					<td data-title="Name">100000</td>
					<td data-title="Status">50000</td>
					<td data-title="Status">50000</td>
				</tr>
			</tbody>
		</table>
	</div>
</div> -->

<hr>
<center>
<!-- <table id="main-table">
<tr>
	<td rowspan="2"> -->
		<div id="demo1">
			<div class="table-responsive-vertical shadow-z-1">
				<table id="table" class="table table-hover table-mc-light-blue">
					<thead>
						<tr>
							<th rowspan="3"></th>
							<th colspan="3"><b>Percentage of People Using/Having Rudimentary, Intermediate, Advanced Facilities</b></th>
						</tr>
						<tr>
							<th colspan="3"><center>Bathroom Facility</center></th>
						</tr>
						<tr>
							<th>No Latrine Facility</th>
							<th>Pit Latrine</th>
							<th>Piped Sewer/Septic Tank</th>
						</tr>
					</thead>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['BF_RUD'], 2)); ?></td>
						<td><?php echo(round($row['BF_INT'], 2)); ?></td>
						<td><?php echo(round($row['BF_ADV'], 2)); ?></td>
					</tr>
					<tr>
						<td>2011</td>
						<td><?php echo(round($row['BF_RUD_2011'], 2)); ?></td>
						<td><?php echo(round($row['BF_INT_2011'], 2)); ?></td>
						<td><?php echo(round($row['BF_ADV_2011'], 2)); ?></td>
					</tr>
					<thead>
						<tr>
							<th rowspan="2"></th>
							<th colspan="3"><center>Fuel for Cooking</center></th>
						</tr>
						<tr>
							<th>Firewood</th>
							<th>Cow Dung/Kerosene</th>
							<th>LPG/PNG/Biogas</th>
						</tr>
					</thead>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['FC_RUD'], 2)); ?></td>
						<td><?php echo(round($row['FC_INT'], 2)); ?></td>
						<td><?php echo(round($row['FC_ADV'], 2)); ?></td>
					</tr>
					<tr>
						<td>2011</td>
						<td><?php echo(round($row['FC_RUD_2011'], 2)); ?></td>
						<td><?php echo(round($row['FC_INT_2011'], 2)); ?></td>
						<td><?php echo(round($row['FC_ADV_2011'], 2)); ?></td>
					</tr>
					<thead>
						<tr>
							<th rowspan="2"></th>
							<th colspan="3"><center>Condition of Household</center></th>
						</tr>
						<tr>
							<th>Dilapidated House</th>
							<th>Livable House</th>
							<th>Good House</th>
						</tr>
					</thead>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['CHH_RUD'], 2)); ?></td>
						<td><?php echo(round($row['CHH_INT'], 2)); ?></td>
						<td><?php echo(round($row['CHH_ADV'], 2)); ?></td>
					</tr>
					<tr>
						<td>2011</td>
						<td><?php echo(round($row['CHH_RUD_2011'], 2)); ?></td>
						<td><?php echo(round($row['CHH_INT_2011'], 2)); ?></td>
						<td><?php echo(round($row['CHH_ADV_2011'], 2)); ?></td>
					</tr>
					<thead>
						<tr>
							<th rowspan="2"></th>
							<th colspan="3"><center>Main Source of Light</center></th>
						</tr>
						<tr>
							<th>No Source of Light</th>
							<th>Kerosene Oil/Other Oil</th>
							<th>Electricity/Solar Light</th>
						</tr>	
					</thead>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['MSL_RUD'], 2)); ?></td>
						<td><?php echo(round($row['MSL_INT'], 2)); ?></td>
						<td><?php echo(round($row['MSL_ADV'], 2)); ?></td>
					</tr>
					<tr>
						<td>2011</td>
						<td><?php echo(round($row['MSL_RUD_2011'], 2)); ?></td>
						<td><?php echo(round($row['MSL_INT_2011'], 2)); ?></td>
						<td><?php echo(round($row['MSL_ADV_2011'], 2)); ?></td>
					</tr>
					<thead>
						<tr>
							<th rowspan="2"></th>
							<th colspan="3"><center>Main Source of Water</center></th>
						</tr>
						<tr>
							<th>Well/Spring/River</th>
							<th>Hand Pump/Tube Well</th>
							<th>Tap Water/Treated Water</th>
						</tr>	
					</thead>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['MSW_RUD'], 2)); ?></td>
						<td><?php echo(round($row['MSW_INT'], 2)); ?></td>
						<td><?php echo(round($row['MSW_ADV'], 2)); ?></td>
					</tr>
					<tr>
						<td>2011</td>
						<td><?php echo(round($row['MSW_RUD_2011'], 2)); ?></td>
						<td><?php echo(round($row['MSW_INT_2011'], 2)); ?></td>
						<td><?php echo(round($row['MSW_ADV_2011'], 2)); ?></td>
					</tr>
					<thead>
						<tr>
							<th></th>
							<th colspan="3"><center>Asset Ownership</center></th>
						</tr>
						<tr>
							<th></th>
							<th>Radio</th>
							<th>TV</th>
							<th>Telephone</th>
						</tr>	
					</thead>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['radio_transistor'], 2)); ?></td>
						<td><?php echo(round($row['TV'], 2)); ?></td>
						<td><?php echo(round($row['Telephone'], 2)); ?></td>
					</tr>
					<tr>
						<td>2011</td>
						<td><?php echo(round($row['Radio_2011'], 2)); ?></td>
						<td><?php echo(round($row['TV_2011'], 2)); ?></td>
						<td><?php echo(round($row['Telephone_2011'], 2)); ?></td>
					</tr>
					<thead>
						<tr>
							<th></th>
							<th>2 Wheeler</th>
							<th>4 Wheeler</th>
							<th>No Asset</th>
						</tr>	
					</thead>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['Column_2_wheeler'], 2)); ?></td>
						<td><?php echo(round($row['Column_4_wheeler'], 2)); ?></td>
						<td><?php echo(round($row['No_asset'], 2)); ?></td>
					</tr>
					<tr>
						<td>2011</td>
						<td><?php echo(round($row['Column_2_Wheeler_2011'], 2)); ?></td>
						<td><?php echo(round($row['Column_4_Wheeler_2011'], 2)); ?></td>
						<td><?php echo(round($row['No_Asset_2011'], 2)); ?></td>
					</tr>
				</table>
			</div>
		</div>
<!-- 	</td>
	<td> -->
		<div id="demo2">
			<div class="table-responsive-vertical shadow-z-1">
				<table id="table" class="table table-hover table-mc-red">
					<thead>
						<tr>
							<!-- <th rowspan="2"></th> -->
							<th colspan="5"><center>Labels</center></th>
						</tr>
						<tr>
							<th></th>
							<th>Bathroom<br>Facility</th>
							<th>Fuel for<br>Cooking</th>
							<th>Condition of<br>Household</th>
							<th>Asset<br>Ownership</th>
						</tr>	
					</thead>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['BF_2001'], 2)); ?></td>
						<td><?php echo(round($row['FC_2001'], 2)); ?></td>
						<td><?php echo(round($row['CHH_2001'], 2)); ?></td>
						<td><?php echo(round($row['ASSET_2001'], 2)); ?></td>
					</tr>
					<tr>
						<td>2011</td>
						<td><?php echo(round($row['BF_2011'], 2)); ?></td>
						<td><?php echo(round($row['FC_2011'], 2)); ?></td>
						<td><?php echo(round($row['CHH_2011'], 2)); ?></td>
						<td><?php echo(round($row['ASSET_2011'], 2)); ?></td>
					</tr>
					<thead>
						<tr>
							<th></th>
							<th>Main Source<br>of Light</th>
							<th>Main Source<br>of Water</th>
							<th>Literacy<br><br></th>
							<th>Industry<br><br></th>
						</tr>	
					</thead>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['MSL_2001'], 2)); ?></td>
						<td><?php echo(round($row['MSW_2001'], 2)); ?></td>
						<td><?php echo(round($row['LIT_2001'], 2)); ?></td>
						<td><?php echo(round($row['Ind_2001'], 2)); ?></td>
					</tr>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['MSL_2011'], 2)); ?></td>
						<td><?php echo(round($row['MSW_2011'], 2)); ?></td>
						<td><?php echo(round($row['LIT_2011'], 2)); ?></td>
						<td><?php echo(round($row['Ind_2011'], 2)); ?></td>
					</tr>
					<thead>
						<tr>
							<th></th>
							<th>Employment<br><br></th>
							<th>Formal <br>Employment</th>
							<th>Female Marginal<br>Employment</th>
							<th>Female Main<br>Employment</th>
						</tr>	
					</thead>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['EMP_2001'], 2)); ?></td>
						<td><?php echo(round($row['Formal_EMP_2001'], 2)); ?></td>
						<td><?php echo(round($row['F_Marg_2001_L'], 2)); ?></td>
						<td><?php echo(round($row['F_Main_2001_L'], 2)); ?></td>
					</tr>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['EMP_2011'], 2)); ?></td>
						<td><?php echo(round($row['Formal_emp_2011'], 2)); ?></td>
						<td><?php echo(round($row['F_marg_2011_L'], 2)); ?></td>
						<td><?php echo(round($row['F_Main_2011_L'], 2)); ?></td>
					</tr>
				</table>
			</div>
		</div>
<!-- 	</td>
</tr>
<tr>
	<td> -->
		<div id = "demo3">
			<div class="table-responsive-vertical shadow-z-1">
				<table id="table" class="table table-hover table-mc-green">
					<thead>
						<tr>
							<th rowspan="2"></th>
							<th colspan="3">Information Related to Employment and Demographics</th>
						</tr>
						<tr>
							<th>Total Population</th>
							<th>Eligible Population</th>
							<th>No of Households</th>
						</tr>
					</thead>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['TOT_P']/100000, 2)).(' lakhs'); ?></td>
						<td><?php echo(round($row['ELG_POP']/100000, 2)).(' lakhs'); ?></td>
						<td><?php echo(round($row['No_HH']/100000, 2)).(' lakhs'); ?></td>
					</tr>
					<tr>
						<td>2011</td>
						<td><?php echo(round($row['TOT_P_2011']/100000, 2)).(' lakhs'); ?></td>
						<td><?php echo(round($row['ELG_POP_2011']/100000, 2)).(' lakhs'); ?></td>
						<td><?php echo(round($row['No_HH_2011']/100000, 2)).(' lakhs'); ?></td>
					</tr>
					<thead>
						<tr>
							<th></th>
							<th>Literacy</th>
							<th>Female Marginal<br>Employment</th>
							<th>Female Main <br>Employment</th>
						</tr>	
					</thead>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['LIT'], 2)); ?></td>
						<td><?php echo(round($row['F_Marg_2001'], 2)); ?></td>
						<td><?php echo(round($row['F_Main_2001'], 2)); ?></td>
					</tr>
					<tr>
						<td>2011</td>
						<td><?php echo(round($row['LIT_2011_val'], 2)); ?></td>
						<td><?php echo(round($row['F_marg_2011'], 2)); ?></td>
						<td><?php echo(round($row['F_Main_2011'], 2)); ?></td>
					</tr>
					<thead>
						<tr>
							<th></th>
							<th>Unmployment</th>
							<th>Agricultural <br>Employment</th>
							<th>Non-Agricultural<br>Employment</th>
						</tr>
					</thead>
					<tr>
						<td>2001</td>
						<td><?php echo(round($row['EMP_UN'], 2)); ?></td>
						<td><?php echo(round($row['EMP_AL'], 2)); ?></td>
						<td><?php echo(round($row['EMP_NAL'], 2)); ?></td>
					</tr>
					<tr>
						<td>2011</td>
						<td><?php echo(round($row['EMP_UN_2011'], 2)); ?></td>
						<td><?php echo(round($row['EMP_AL_2011'], 2)); ?></td>
						<td><?php echo(round($row['EMP_NAL_2011'], 2)); ?></td>
					</tr>
				</table>
			</div>
		</div>
<!-- 	</td>
</tr>	
</table> -->
</center>

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-uys7{border-color:inherit;text-align:center}
.tg .tg-xldj{border-color:inherit;text-align:left}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
</style>

<!-- <table>
  <tr>
    <th rowspan="3"></th>
    <th colspan="3">Percentage of People Using/Having Rudimentary, Intermediate, Advanced Facilities</th>
  </tr>
  <tr>
    <td colspan="3">Bathroom Facility</td>
  </tr>
  <tr>
    <td>No Latrine Facility</td>
    <td>Pit Latrine</td>
    <td>Piped Sewer/Septic Tank</td>
  </tr>
  <tr>
    <td>2001</td>
    <td>19.86</td>
    <td>19.08</td>
    <td>11.01</td>
  </tr>
  <tr>
    <td>2011</td>
    <td>19.86</td>
    <td>19.08</td>
    <td>11.01</td>
  </tr>
  <tr>
    <td rowspan="2"></td>
    <td colspan="3">Fuel for Cooking</td>
  </tr>
  <tr>
    <td>Firewood</td>
    <td>Cow Dung/Kerosene</td>
    <td>LPG/PNG/Biogas</td>
  </tr>
  <tr>
    <td>2001</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>2011</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td rowspan="2"></td>
    <td colspan="3">Condition of Household</td>
  </tr>
  <tr>
    <td>Dilapidated House</td>
    <td>Livable House</td>
    <td>Good House</td>
  </tr>
  <tr>
    <td>2001</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>2011</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td rowspan="2"></td>
    <td colspan="3">Main Source of Light</td>
  </tr>
  <tr>
    <td>No Source of Light</td>
    <td>Kerosene Oil/Other Oil</td>
    <td>Electricity/Solar Light</td>
  </tr>
  <tr>
    <td>2001</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>2011</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td rowspan="2"></td>
    <td colspan="3">Main Source of Water</td>
  </tr>
  <tr>
    <td>Well/Spring/River</td>
    <td>Hand Pump/Tube Well</td>
    <td>Tap Water/Treated Water</td>
  </tr>
  <tr>
    <td>2001</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>2011</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="3">Asset Ownership</td>
  </tr>
  <tr>
    <td></td>
    <td>Radio</td>
    <td>TV</td>
    <td>Telephone</td>
  </tr>
  <tr>
    <td>2001</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>2011</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>2 Wheeler</td>
    <td>4 Wheeler</td>
    <td>No Asset</td>
  </tr>
  <tr>
    <td>2001</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>2011</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table> -->

<!-- <table>
  <tr>
    <th rowspan="2"></th>
    <th colspan="3">Information Related to Employment and Demographics</th>
  </tr>
  <tr>
    <td>Total Population</td>
    <td>Eligible Population</td>
    <td>No Household</td>
  </tr>
  <tr>
    <td>2001</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>2011</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Literacy</td>
    <td>Female Marginal<br>Employment</td>
    <td>Female Main <br>Employment</td>
  </tr>
  <tr>
    <td>2001</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>2011</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Unmployment</td>
    <td>Agricultural <br>Employment</td>
    <td>Non-Agricultural<br>Employment</td>
  </tr>
  <tr>
    <td>2001</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>2011</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table> -->

<!-- <table>
  <tr>
    <th rowspan="2"></th>
    <th colspan="4">Labels</th>
  </tr>
  <tr>
    <td>Bathroom<br>Facility</td>
    <td>Fuel for<br>Cooking</td>
    <td>Condition of<br>Household</td>
    <td>Asset<br>Ownership</td>
  </tr>
  <tr>
    <td>2001</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>2011</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Main Source<br>of Light</td>
    <td>Main Source<br>of Water</td>
    <td>Literacy<br><br></td>
    <td>Industry</td>
  </tr>
  <tr>
    <td>2001</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>2011</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Employment</td>
    <td>Formal <br>Employment</td>
    <td>Female Marginal<br>Employment</td>
    <td>Female Main<br>Employment</td>
  </tr>
  <tr>
    <td>2001</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>2011</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table> -->
<div id="footer"></div>
</body>
</html>
