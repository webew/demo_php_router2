<?php
$mdp = "tata";


$hash = password_hash($mdp, PASSWORD_DEFAULT);
var_dump($hash);
