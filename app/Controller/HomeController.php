<?php

namespace Iqbal\Belajar\PHP\MVC\Controller;

use Iqbal\Belajar\PHP\MVC\App\View;

class HomeController
{
     function index(): void
     {
          $model = [
               "title" => "Belajar PHP MVC",
               "content" => "Selamat Belajar PHP MVC dari Pogramer Zaman Now"
          ];
          View::render("Home/index", $model);
     }

     function hello(): void
     {
          echo "HomeController.hello()";
     }

     function world(): void
     {
          echo "HomeController.world()";
     }

     function about(): void
     {
          echo "Author : Iqbal";
     }

     function login(): void
     {
          $request = [
               "username" => $_POST['username'],
               "password" => $_POST['password']
          ];

          $user = [];

          $response = [
               "massage" => "login sukses"
          ];
          // Kirimkan responsenya ke view
     }
}
