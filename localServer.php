<?php
$indiceServer = ['PHP_SELF','argv','argc','GATEWAY_INTERFACE','SERVER_ADDR','SERVER_NAME',
'SERVER_SOFTWARE','HTTP_USER_AGENT','SERVER_PROTOCOL','REQUEST_METHOD','REQUEST_TIME'];
echo __LINE__."<br>";
echo __FILE__."<br>";
echo __DIR__."<br>";
echo "<pre>";
print_r($indiceServer);
echo "</pre>";
echo PHP_OS;
?>