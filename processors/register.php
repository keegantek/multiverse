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

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    // validation
    if (empty($first_name)) {
        $errors['first_name'] = "Please enter a first name";
    }
    if (empty($last_name)) {
        $errors['last_name'] = "Please enter a last name";
    }
    if (empty($email)) {
        $errors['email'] = "Please enter an email";
    }
    if (empty($password)) {
        $errors['password'] = "Please enter a password";
    } else if ($password != $repeat_password) {
        $errors['password'] = "Your passwords don't match";
    }
    if (User::check($email)) {
        $errors['email'] = "That email is already being used by another account";
    };

    // if no errors, register user
    if (empty($errors)) {
        $user = new User($email, $password, $first_name, $last_name);
        $auth = Auth::validate($email, $password);

        if ($auth) {
            print_r(Auth::user());
        }

        return redirect('/index.php');
    }
}
