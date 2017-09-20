<?php
//Get the user entered string
$text='text=';
$text=$text.$_GET['string'];

//Set the API URL to according to appropriate choice
$choice=$_GET['choice'];
$url='http://api.funtranslations.com/translate/'.$choice.'.json';


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $text);
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = "X-Funtranslations-Api-Secret: <api_key>";
$headers[] = "Content-Type: application/x-www-form-urlencoded";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

// if (curl_errno($ch)) {
//     echo 'Error:' . curl_error($ch);
// }

//Sample successful return JSON object for testing
// $result = '{
//     "success": {
//         "total": 1
//     },
//     "contents": {
//         "translated": "ka am crying",
//         "text": "I am crying",
//         "translation": "minion"
//     }
// }';

//Sample failed return JSON object for testing
// $result='{
//     "error":{
//         "code": 2,
//         "message": "Number of tries exceeded!"
//     }
// }';


echo $result;


curl_close ($ch);



?>
