<?php
require_once '../vendor/autoload.php';
session_start();
$facebook_keys = require('./facebook-app-keys.php');
$provider = new League\OAuth2\Client\Provider\Facebook([
    'clientId'          => $facebook_keys['clientId'],
    'clientSecret'      => $facebook_keys['clientSecret'],
    'redirectUri'       => $facebook_keys['redirectUri'],
    'graphApiVersion'   => 'v2.8',

]);

