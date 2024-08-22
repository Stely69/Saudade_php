<?php
    include_once '../Controller/AuthController.php';

    $authController = new AuthController();
    $authController->login($_POST['email'], $_POST['password']);
    session_start();

//$validEmail = 'seller1@example.com';
//$validPassword = 'seller1_password';

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$email = $_POST['email'];
    //$password = $_POST['password'];

   // if ($email === $validEmail && $password === $validPassword) {
       
   //     header("Location: ../Views/inicioseller.php");
   //     exit();
   // } else {
     
//$validEmail = 'admin@example.com';
//$validPassword = 'admin_password';

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //  $email = $_POST['email'];
  //  $password = $_POST['password'];

  //  if ($email === $validEmail && $password === $validPassword) {
       
   //     header("Location: ../Views/inicioadmin.php");
   //     exit();
   // } else {
     
   //     header("Location: ../Views/admin.php");
   //     exit();
   // }
//}
//}
//}
    //session_start();


