<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/b16db7aa242fba68/webcams/q/CA/San_Francisco.json");
	$json_string2 = file_get_contents("http://api.wunderground.com/api/b16db7aa242fba68/astronomy/q/Australia/Sydney.json");
	$json_string3 = file_get_contents ("http://api.wunderground.com/api/b16db7aa242fba68/planner_07010731/q/CA/San_Francisco.json");         
	$parsed_json = json_decode ($json_string);
	$parsed_json2 = json_decode ($json_string2);
	$parsed_json3 = json_decode ($json_string3);
	$as = $parsed_json->webcams[0]->{"camid"};
	$as1 = $parsed_json->webcams[0]->{"assoc_station_id"};
	$as2 = $parsed_json->webcams[0]->{"country"};
	
	$san = $parsed_json2->{"moon_phase"}->{"sunrise"}->{"minute"};
	$san1 = $parsed_json2->{"moon_phase"}->{"sunset"}->{"minute"};
	$san2 = $parsed_json2->{"moon_phase"}->{"moonset"}->{"minute"};
	
	$air = $parsed_json3->{"trip"}->{"period_of_record"}->{"date_start"}->{"date"}->{"day"};
	$air1 = $parsed_json3->{"trip"}->{"period_of_record"}->{"date_start"}->{"date"}->{"year"};
	$air2 = $parsed_json3->{"trip"}->{"period_of_record"}->{"date_start"}->{"date"}->{"hour"};
	
	echo "Pembelian camera di Indonesia";
	echo "<br>";
	echo "jenis camera : ${as}\n";
	echo "<br>";
	echo "type camera : ${as1}\n";
    echo "<br>";	
	echo "dimana kamera ini di produksi : ${as2}\n";
	echo "<br>";
	echo "<br>";
	echo " berapa menit sunrise muncul di pagi hari: ${san}\n";
	echo "<br>";
	echo " berapa menit sunset muncul di sore hari: ${san1}\n";
	echo "<br>";
	echo " berapa menit moonset muncul pada dini hari : ${san2}\n";
	echo "<br>";
	echo "<br>";
	echo "berapa hari pemesanan tiket pesawat sebelum hari H : ${air}\n";
	echo "<br>";
	echo "pada tahun berapa pesawat vian air di resmikan : ${air1}\n";
	echo "<br>";
	echo "membutuhan berapa jam perjalanan dari INA menuju makah : ${air2}\n";
	echo "<br>";
?>