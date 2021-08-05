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
    <header>
        <div class="header-title">Multiverse</div>
        <ul>
            <?php
            if (Auth::active()) {
            ?>
                <li>Hi <?php echo Auth::user()['first_name']; ?></li>
                <li><a href="/profile.php">Profile</a></li>
                <li><a href="/logout.php">Logout</a></li>
            <?php
            } else {
            ?>
                <li><a href="/register.php"><button class="button-minimal">Sign Up</button></a></li>
                <li><a href="/login.php"><button>Sign In</button></a></li>
            <?php
            }
            ?>
        </ul>
    </header>