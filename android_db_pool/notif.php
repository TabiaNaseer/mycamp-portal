<?php
if(isset($_POST['add-news'])){
function sendNotif($to, $notif){
    $apiKey=
    "AAAAZNTx2G4:APA91bG1gQxZfb7072IRZqdlTd67xeqXmyuYOQ3k8MDxoogYXk6OkEA-VHRy1EOrQgnyvYlmnIB1RhFgfUh-68uGmnrDGTjFq431BlE9NheNABiigaTlFESulz8fLBWnHXOqI0SiwSh1";
    $ch= curl_init();

    $url="https://fcm.googleapis.com/fcm/send";
    $field= json_encode(array('to'=>$to, 'notification'=>$notif));
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,($field));

    $headers = array();
    $headers[] = 'Authorization: key ='.$apiKey;
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
}
$to ='/topics/newnotice';
$notif = array(
    'tittle'=> 'New Notice',
    'body' => 'New Notice Added'

);

sendNotif($to, $notif);
}
?>