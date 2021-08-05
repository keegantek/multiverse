<?php

namespace Models;

use Models\DB;

class User
{

    public $email;
    public $password;
    public $first_name;
    public $last_name;

    function __construct($email, $password, $first_name, $last_name)
    {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);


        $sql = "INSERT INTO `users` (`email`, `password`, `first_name`, `last_name`, `last_login`) VALUES ('$email', '$password_hash', '$first_name', '$last_name', now())";

        $query = new DB($sql);
    }

    public static function check($identifier_value)
    {
        if (is_int($identifier_value)) {
            $identifier = "id";
        } else {
            $identifier = "email";
        }

        $query = new DB("SELECT * FROM `users` WHERE `$identifier`='$identifier_value'");

        if ($query->num_rows > 0) {
            return true;
        }
        return false;
    }

    public static function find($identifier_value)
    {
        if (is_int($identifier_value)) {
            $identifier = "id";
        } else {
            $identifier = "email";
        }

        $query = new DB("SELECT * FROM `users` WHERE `$identifier`='$identifier_value'");

        if ($query->num_rows > 0) {
            return $query->result[0];
        }

        return null;
    }

    public static function verify($email, $password)
    {

        $user = User::find($email);

        if (!is_null($user)) {
            if (password_verify($password, $user['password'])) {
                return true;
            }
        }

        return false;
    }
}
