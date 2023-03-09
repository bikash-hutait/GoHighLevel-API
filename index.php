<?php
// 1. Find userId
// 2. Find calendarId  => "Book with Bikash Hutait" calendar
// 3. Search data for specific contact id


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rest.gohighlevel.com/v1/appointments/?startDate=1670848071000&endDate=1671452871000&userId=4XXTQNc4P1sIQh2mLINF&calendarId=CeDx7eHoH6pzpIxUygkI&includeAll=true',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
   'Content-Type: application/json',
    'Authorization: Bearer <token>'
 
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


?>

