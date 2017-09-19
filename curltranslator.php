<?php
// $ch = curl_init();
//
// $text='text=I love you!';
//
//
// curl_setopt($ch, CURLOPT_URL, "http://api.funtranslations.com/translate/valspeak.json");
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

$result = '{
    "success": {
        "total": 1
    },
    "contents": {
        "translated": "ka am crying",
        "text": "I am crying",
        "translation": "minion"
    }
}';

$data = json_decode($result, TRUE);
if(isset($data['error']['code']))
{
echo $data['error']['code'];
echo $data['error']['message'];
}
else {
    echo $data['contents']['translated'];
    echo $data['contents']['text'];
    echo $data['contents']['translation'];
}

// curl_close ($ch);



?>
