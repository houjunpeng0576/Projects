<?php
require_once 'Connect2.1/qqConnectAPI.php';

$oauth = new Oauth();
$accesstoken = $oauth->qq_callback();
print_r($accesstoken);
