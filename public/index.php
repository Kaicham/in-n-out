<?php

require_once(dirname(__FILE__, 2) . "/src/config/config.php");
require_once(dirname(__FILE__, 2) . "/src/models/User.php");


// $user = new User([ "name" => "lucas", "email" => "kaikham@hotmail.com" ]);
// $user->name = "kaique";

// echo User::getResultSetFromSelect() . "<br>";
// print_r(  User::get(["name"=>"Chaves"]) );
// echo User::getResultSetFromSelect(["id" => 1], "email") . "<br>";

foreach(User::get() as $user) {
    echo $user->name . "<br>";
}
