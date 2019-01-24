<?php
$access_token = 'ddhA4ny36rYV3Sy+47CSCUf+PMyAJaE23MbCmaH6j1ZRehTYV4li3lWoqks2pw13D2s846RfTo08iz7hadIyogZ3xeySBqPQ8JGdTM6oqZ750uTblUYVNYq3hZzL7PI1UmV1E/5n7/cLqQE3ezmuSwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
