<?php
$user_data = array("usuario" => "cepsistemas" ,"password" => "ZOpU7MFr8vXV7OE6c8cMui71IIYDESFaZ9FAjml8" );
$data = json_encode($user_data);
$headers = array('Accept: application/json', 'Content-Type: application/json');
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, 'https://www.saep.unam.mx/api-2/cep/alumno/'.$num_cuenta);
curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($handle, CURLOPT_POST, true);
curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
curl_close($handle);
print_r($response);
?>