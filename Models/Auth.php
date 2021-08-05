<?php

namespace Models;

class Auth
{


    public static function validate($email, $password)
    {

        if (User::verify($email, $password)) {

            $_SESSION['user'] = User::find($email);

            return true;
        }
        return false;
    }

    public static function user()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        return null;
    }

    public static function active()
    {
        if (isset($_SESSION['user'])) {
            return true;
        }
        return false;
    }

    public static function destroy()
    {
        session_destroy();
    }
}
