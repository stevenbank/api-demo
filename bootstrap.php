<?php
// Include composer
include 'vendor/autoload.php';

// Set up our identity provider, giving it the clientId, clientSecret and redirectUri that ThriveCart have sent you as the application developer
$provider = new \ThriveCart\Oauth([
	'clientId' => 'example-client-1', // Your application's client ID
	'clientSecret' => 'examplepass', // Your application's client secret
	'redirectUri' => 'http://localhost/thrivecart-api-demo/oauth_example.php', // URL to be redirected to after OAuth acceptance
]);