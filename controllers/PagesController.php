<?php

namespace Blog\Controllers;

class PagesController
{
  public function about() 
  {
    require "views/about.view.php";
  }

  public function contact() 
  {
    $title = "Hello";
    
    require "views/contact.view.php";
  }
}