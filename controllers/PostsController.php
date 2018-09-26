<?php

namespace Blog\Controllers;

use Farzanegan\{App, Validation};

class PostsController
{
  public function index()
  {
    $posts = App::get('query')->selectAll('posts');

    require 'views/index.view.php';
  }

  public function create()
  {
    session_start();

    $errors = isset($_SESSION['errors']) ?
      $_SESSION['errors'] : 
      [];

    unset($_SESSION['errors']);

    require "views/create.view.php";
  }

  public function store()
  {
    $validation = new Validation();

    $rules = [
      'title' => 'required|min:3',
      'body' => 'required|min:5'
    ];

    $validation->validate($_POST, $rules);

    if (count($validation->errors)) {
      session_start();

      $_SESSION['errors'] = $validation->errors;

      header('Location: /create');
      exit();
    }

    App::get('query')->insert('posts', $_POST);

    header('Location: /');
  }
}