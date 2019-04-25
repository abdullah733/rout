<?php

namespace App\controller;
class HomeController
{
    public function getIndex()
    {
       include_once __DIR__.'/../../views/home.php';
    }
    public function getAbout()
    {
     include_once __DIR__.'/../../views/about.php';
    }
    public  function getLogin()
    {
       include_once __DIR__.'/../../views/login.php';
    }
    public  function getRegister()
    {
      include_once __DIR__.'/../../views/register.php';
    }
}
