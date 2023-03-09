<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rest.gohighlevel.com/v1/contacts/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "email": "bikashd@cleonix.net",
    "phone": "+18887324197",
    "firstName": "Bikash",
    "lastName": "Test",
    "name": "Bikash Hutait",
    "dateOfBirth": "",
    "address1": "3535 1st St N",
    "city": "Dolomite",
    "state": "AL",
    "country": "US",
    "postalCode": "35061",
    "companyName": "",
    "website": "",    
    "source": "public api",
    "type": "customer",
    "tags":["skipforce members"] 

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
