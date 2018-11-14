<?php
require_once 'autoload.php';


$auth->logout();
var_dump($_SESSION);
header("Location: home.php");
