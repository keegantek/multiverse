<?php

use Models\Auth;

if (!isset($page_title)) {
    $page_title = "Home";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>

    <link rel="stylesheet" href="/css/main.css">
</head>

<body>