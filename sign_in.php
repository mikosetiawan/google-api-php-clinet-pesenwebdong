<?php
require_once 'config.php';
session_start();

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client-> setAccessToken($token);

    $googleAuth = new Google_Service_Oauth2($client);
    $google_info = $googleAuth->userinfo->get(); 

   $_SESSION['info'] = [
        'name' => $google_info->name,
        'email' => $google_info->email,
        'picture' => $google_info->picture,
   ];


   header('Location: http://localhost/login-google-pesenwebdong/index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>

<body>

    <a href="<?= $client->createAuthUrl() ?>">Login dengan akun Google</a>
</body>

</html>