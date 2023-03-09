<?php
  $GH_CF_ClientType = "N685FozQaO10BsUx0N4M";
  

 $fields = array(
    "email" => "bikash@cleonix.com",
    "phone" => "+18887324197",
    "customField" => array(
      $GH_CF_ClientType => "Affiliate", //Client Type     
    ),
   );

  //url-ify the data for the POST
$fields_string = json_encode($fields);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rest.gohighlevel.com/v1/contacts/6xtHGKVKAA9hl4xAcnmV',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS =>$fields_string,
  CURLOPT_HTTPHEADER => array(
   'Content-Type: application/json',
    'Authorization: Bearer <token>'
 
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
  echo "Error: <br>";
  echo json_encode($err);
}else{
  echo "Success: <br>";
  $result = json_decode($response);
  echo "<pre>";
  print_r($result);
}

?>
