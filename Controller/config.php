<?php

 require_once '../vendor/autoload.php';


 
 $client_id = '359981337589-s24a57cj1dvau76eu1e95843c1sqo9g8.apps.googleusercontent.com';
 $client_secret = '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';
 $redirect_uri = 'http://localhost/Saudade_php/Views/inicio.php';
 

 
    
    $client = new Google_Client();
    $client->setClientId($client_id);
    $client->setClientSecret($client_secret);
    $client->setRedirectUri($redirect_uri);
    $client->addScope('email');
    $client->addScope('profile');
    
    return $client;
?> 

