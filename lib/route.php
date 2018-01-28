<?php
  class route
  {
      public function __construct()
      {
          if(isset($_GET['url'])) {
              $url = $_GET['url'];
              $url = explode('/', rtrim($url,'/'));
              $file = 'controllers/' . $url[0] . '.php';
             if(file_exists($file)) {
               include_once $file;
               $controller = new $url[0];
             } else {
               include "controllers/error_page.php";
               $error = new error_page();
             }
          } else {
              $controller= new home;
          }
      }
  }