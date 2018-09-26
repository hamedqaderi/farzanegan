<?php 

require "vendor/autoload.php";
require "core/bootstrap.php";

use Farzanegan\Request;
use Farzanegan\Route;

Route::load('routes.php')
      ->direct(
        Request::uri(),
        Request::method()
);


