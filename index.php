<?php
$consumerKey = 'key'; // key
$consumerSecret = 'sercret'; // sercret

include 'vendor/dropbox-php/dropbox-php/src/Dropbox/autoload.php';

$oauth = new Dropbox_OAuth_PHP($consumerKey, $consumerSecret);
$dropbox = new Dropbox_API($oauth);

// auth
$tokens = $dropbox->getToken('email', 'pass'); 
$oauth->setToken($tokens);

$h = fopen('/PATH/browserling.jpg', 'r'); // upload file
$dropbox->putFile('browserling.jpg', $h); // put file
?>