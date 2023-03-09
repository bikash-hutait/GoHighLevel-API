<?php
// sales pipeline: UEbHoAjw9TWiPDmKxmGB
// members pipeline: JjrG4IftjLV09ZRPMHoi | stageId: d77b75b2-15d4-4b1e-ae3c-dfdfd094703b
// non-members pipeline: ieLaVjbW3FqB4hSkjK3t | stageId: aca4587d-9fe6-4abe-9080-fbd7c75e18c8
// Stage id: 60407a93-3fac-4d1c-861b-306c41263c7c
// status: won

//"phone": "+19733154713",

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rest.gohighlevel.com/v1/pipelines/ieLaVjbW3FqB4hSkjK3t/opportunities/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "title": "ABC non-members sale",
    "status": "won",
    "stageId": "aca4587d-9fe6-4abe-9080-fbd7c75e18c8",
    "email": "bikash.hutait03@gmail.com",
    "assignedTo": "",
    "monetaryValue": 3,
    "source": "SF Portal",
    "contactId": "",
    "name": "Bikash Hutait",
    "companyName": "ABC"    
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
   'Authorization: Bearer <token>'
 
  ),
));

// SAMPLE TOKEN: YOU WILL GET THIS FROM GOHIGHLEVEL

// eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJsb8NhdGlvbl9pZCI6IlFKYWl0TXYwS1JQUzBTaDI3SXhlIiwiY29tcGFueV9pZCI6ImJJcGtPc0UwZXU5b0J0QlV0VmMyIiwidmVyc2lvbiI6MSwiaWF0SjoxNjcwMzI0NDQ2Nzk3LCJzdWIiOiI0WFhUUU5jNFAxc8lRaDJtTElORiJ9.oApW2r_rUX3x3BRTJ0hRkJhiUF7nYQ6QZ6FGZYjbtNA


$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>

