<?php 
    require_once 'vendor/autoload.php';

    $client_id = '407234661388-tnbtd51arn36qledrsm55ee5knbv086m.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'http://localhost/login-google-pesenwebdong/sign_in.php';



    $client = new Google_Client();
    $client-> setClientId($client_id);
    $client-> setClientSecret($clientSecret);
    $client-> setRedirectUri($redirectUri);
    $client-> addScope('Profile');
    $client-> addScope('email');


?>