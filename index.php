<?php
session_start();
require_once "config/config.php"; // charge le fichier et empêche de le charger une 2éme fois
require_once CLASSES . "/Router.php";

$router = new Router();
$router->routing();
