<?php


namespace App\classess;


    class HelloWorld
    {
      public $message;

      public function __construct()
      {
        $this->message="Hello PHP";
      }
      public function index()
      {
          echo $this->message;
      }

    }