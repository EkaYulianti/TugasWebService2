<h1> PRAKIRAAN CUACA HARI INI DIWILAYAH MUGASSARI</H1>

<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/87ffe4528596bbed/forecast/q/IA/mugassari.json");
	$parsed_json = json_decode ($json_string);
	
	$forecast = $parsed_json->{'forecast'}->{'txt_forecast'}->{"date"};
	
	$json_string2 = file_get_contents("http://api.wunderground.com/api/87ffe4528596bbed/conditions/q/IA/mugassari.json");
	$parsed_json2 = json_decode ($json_string2);
	
	$conditions = $parsed_json2->{'current_observation'}->{'display_location'}->{"state_name"};
	$condi = $parsed_json2->{'current_observation'}->{'display_location'}->{"city"};
	
	
	$json_string3 = file_get_contents ("http://api.wunderground.com/api/a657d7d2ba430b38/planner_08010831/q/IA/mugassari.json");
	$parsed_json3 = json_decode ($json_string3);
	
	$suhu = $parsed_json3->{'trip'}->{'temp_high'}->{"avg"}->{"C"};
	$suhu2 = $parsed_json3->{'trip'}->{'temp_low'}->{"avg"}->{"C"};
	$cuaca = $parsed_json3->{'trip'}->{'cloud_cover'}->{"cond"};
	
	
	echo "State Name : ${conditions}\n";
	echo "<br>";
	echo "City : ${condi}\n";
	echo "<br>";
	echo "Time : ${forecast}\n";
    echo "<br>";
	echo "The highest temperature: $suhu <sup>O</sup> C";
    echo "<br>";
	echo "Lowest temperature: $suhu2 <sup>O</sup> C";
    echo "<br>";
	echo "Today's weather : ${cuaca}\n" ;
    echo "<br>";
	
	
?>