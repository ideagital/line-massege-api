<?php
$access_token = '9u3BLnV4HzxUslVsMm05XWyrpgi6L6sJhmrCGyEuP6NTXIk2hL7Pk1UvrEKphO1vSP9oLpZHdV8jWBOPFFMsJB+tWYU9cWHSQ3qlrMsz+2+6bXo/iNxYK27VE4uEN33LWZXy4LTwMFahqk7p1BUSTQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
