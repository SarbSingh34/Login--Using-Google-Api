<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('344011593247-gt1m9aeood1lrr82nd60suvouoqbpad5.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('7LO6Hjuh-Asq7o9VWfTzCzdP');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost:8000/googleytApi/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>