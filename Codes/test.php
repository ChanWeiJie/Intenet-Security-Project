<?php


$botToken = "bot380948829:AAHFSBVUQCCBYfa2LetWLOJTHvpAi3e4lAg";
$website = "https://api.telegram.org/bot.$botToken";

$update = file_get_contents($website."/getupdates");

print_r($update);


?>