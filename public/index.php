<?php

require_once(dirname(__FILE__, 2) . "/src/config/config.php");
require_once(dirname(__FILE__, 2) . "/src/models/User.php");


$user = new User([ "name" => "lucas", "email" => "kaikham@hotmail.com" ]);
$user->name = "kaique";
print_r($user->name);
