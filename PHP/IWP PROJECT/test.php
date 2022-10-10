<?php

    // Retrieving Json Data
    $jsonData = file_get_contents("https://api.covid19india.org/data.json");
    $location_data=file_get_contents("https://simplefreegeoip.herokuapp.com");
    $loc_data=json_decode($location_data, true);
    $data = json_decode($jsonData, true);
    $state_cases=file_get_contents("https://api.covid19india.org/state_district_wise.json");
    $state_cases_decode=json_decode("$state_cases",true);
    $state=$loc_data['regionName'];
    $city=$loc_data['city'];
    $state_confirmed=$state_cases_decode[$state]['districtData'][$city]['confirmed'];
    $state_deceased=$state_cases_decode[$state]['districtData'][$city]['deceased'];
    $state_recovered=$state_cases_decode[$state]['districtData'][$city]['recovered'];
    
    foreach($data['cases_time_series'] as $key => $value){
        $days_count = count($value)-1;
        $days_count_prev = $days_count - 1;

    }
    $date_count=count($data['cases_time_series'])-1;
    $total_confirmed = $data['cases_time_series'][$date_count]['totalconfirmed'];
    $total_recovered = $data['cases_time_series'][$date_count]['totalrecovered'];
    $total_deaths = $data['cases_time_series'][$date_count]['totaldeceased'];
    
?>

