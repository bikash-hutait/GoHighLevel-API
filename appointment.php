<?php
// 1. Find userId
// 2. Find calendarId  => "Book with Bikash Hutait" calendar
// 3. Search data for specific contact id
//startDate=1670848071000&endDate=1671452871000&userId=4XXTQNc4P1sIQh2mLINF&calendarId=CeDx7eHoH6pzpIxUygkI&includeAll=true

$start_time = '';
$end_time = '';

$calendar_query_url = 'startDate=1670848071000&endDate=1676885389000&calendarId=tgHu2uYFghMsGWBC8aMV&includeAll=true';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rest.gohighlevel.com/v1/appointments/?'.$calendar_query_url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
   'Authorization: Bearer <token>'
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

$res = json_decode($response);
/*echo "Test2: <br>";
echo "<pre>";
print_r($res);*/


if(isset($res->appointments) && !empty($res->appointments)){
  foreach($res->appointments as $d){
    if($d->contact->email == "bikash.hutait03@gmail.com"){
      $start_time = strtotime($d->startTime);
      $end_time = strtotime($d->endTime);
      break;
    }
  }
}

/*echo "start_time: ".$start_time;
echo "<br>end_time: ".$end_time;*/

//Set timezone for convert meeting time
date_default_timezone_set("America/Chihuahua");
if($start_time != ''){
  $time = date('M d, Y', substr($start_time, 0, 10)).' at '.date('h:i:A', substr($start_time, 0, 10)).' (CST)';
}
echo "Meeting Time: ".$time;


?>

