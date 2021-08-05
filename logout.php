<?php
include 'init.php';

use Models\Auth;

Auth::destroy();

redirect('/index.php');
