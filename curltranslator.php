<?php

$text='text=';
$text=$text.$_GET['string'];
$choice=$_GET['choice'];

switch ($choice) {
    case 'minion':
            $url='http://api.funtranslations.com/translate/minion.json';
        break;

    case 'shakespeare':
            $url='http://api.funtranslations.com/translate/shakespeare.json';
        break;
}
//
// $ch = curl_init();
//
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $text);
// curl_setopt($ch, CURLOPT_POST, 1);
//
// $headers = array();
// $headers[] = "X-Funtranslations-Api-Secret: <api_key>";
// $headers[] = "Content-Type: application/x-www-form-urlencoded";
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//
// $result = curl_exec($ch);
// if (curl_errno($ch)) {
//     echo 'Error:' . curl_error($ch);
// }

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


$result='{
    "error":{
        "code": 2,
        "message": "Number of tries exceeded!"
    }
}';


echo $result;




// $data = json_decode($result, TRUE);
// if(isset($data['error']['code']))
// {
// echo $data['error']['code'];
// echo $data['error']['message'];
// }
// else {
//     echo 'Your text: '.$data['contents']['text'];
//     echo 'Translated text: '.$data['contents']['translated'];
//     echo 'Translation: '.$data['contents']['translation'];
// }
//

//
// curl_close ($ch);



?>
