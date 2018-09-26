<?php

// $routes->define([
//   '' => 'PostsController@index',
//   'about' => 'PagesController@about',
//   'contact' => 'PagesController@contact',
//   'create' => 'PostsController@create',
//   'store' => 'PostsController@store'
// ]);
$routes->get('', 'PostsController@index');
$routes->get('create', 'PostsController@create');
$routes->post('store', 'PostsController@store');
$routes->get('contact', 'PagesController@contact');
$routes->get('about', 'PagesController@about');

// $routes->post();