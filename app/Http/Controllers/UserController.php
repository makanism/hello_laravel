<?php

namespace App\Http\Controllers;

class UserController extends Controller {

  function welcome() {
    return view('welcome');
  }

  function about() {

    $data = [
      'name' => 'John',
      'age' => 25,
      'gender' => 'Male',
      'skills' => [
        'php',
        'javascript',
        'css',
        'html',
      ]
    ];

    return view('about', $data);
  }

  function contact() {
    return view('contact');
  }
}
