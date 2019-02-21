<?php
require_once 'fortnite-api/Autoloader.php';

$api = new FortniteClient;

$data = $api->status->fetch();

echo $data->status;
echo $data->message;
echo $data->version;
?>
