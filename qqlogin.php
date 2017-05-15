<?php
require_once 'Connect2.1/qqConnectAPI.php';

//访问QQ页面
$oauth = new Oauth();
$oauth->qq_login();
