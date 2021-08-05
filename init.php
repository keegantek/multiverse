<?php
session_start();
require 'vendor/autoload.php';

use Models\Auth;

function redirect($location)
{
    header("Location: $location");
    exit();
}
