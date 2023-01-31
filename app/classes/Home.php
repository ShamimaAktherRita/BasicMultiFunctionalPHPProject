<?php


namespace app\classes;


class Home
{
 public function index()

 {
     header('Location: action.php?page=home');
 }

}