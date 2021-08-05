<?php
include 'init.php';

use Models\Auth;
use Models\User as User;

if (Auth::active()) {
    redirect('/index.php');
}

// initialize variables
$first_name = "";
$last_name = "";
$email = "";

$errors = [];



// form submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // validation
    if (empty($email)) {
        $errors['email'] = "Please enter an email";
    }
    if (empty($password)) {
        $errors['password'] = "Please enter a password";
    } else if (!User::verify($email, $password)) {
        $errors['password'] = "The email or password is incorrect";
    };

    // if no errors, register user
    if (empty($errors)) {
        $auth = Auth::validate($email, $password);

        if (!$auth) {
            $errors[] = "There was an error while attempting to sign you in";
        } else {
            return redirect('/index.php');
        }
    }
}
