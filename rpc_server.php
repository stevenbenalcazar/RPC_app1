<?php
function sayHello() {
    return "Hola Mundo!";
}

$options = ['uri' => 'http://localhost/'];
$server = new SoapServer(null, $options);
$server->addFunction("sayHello");
$server->handle();
?>