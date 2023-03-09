<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rest.gohighlevel.com/v1/contacts/6xtHGKVKAA9hl4xAcnmV/tags',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'DELETE',
  CURLOPT_POSTFIELDS =>'{   
    "tags":["non-members"] 

}',
  CURLOPT_HTTPHEADER => array(
   'Content-Type: application/json',
   'Authorization: Bearer <token>'
 
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>
