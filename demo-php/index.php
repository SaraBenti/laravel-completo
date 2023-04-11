<?php
require 'vendor/autoload.php';
//se utilizziamo un framework è lui stesso che fa il require

use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid4();
//metodo uuid4 che viene richiamato in modo statico: eseguo il metodo sulla classe stessa non faccio new 
//se modifico in maniera statica sulla classe non avrò le modifiche alle proprietà

echo $uuid;

