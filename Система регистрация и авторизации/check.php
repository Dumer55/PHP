<?php 
   $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
   $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
   $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
   $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
   $pass2 = filter_var(trim($_POST['pass2']), FILTER_SANITIZE_STRING);

   if(mb_strlen($name) > 50 || mb_strlen($name) < 2) {
    echo " Недопустимая длина Имени";
    exit();
   } else if (mb_strlen($phone) > 30 || mb_strlen($phone) < 1) {
    echo " Недопустимая длина ";
    exit();
   } else if (mb_strlen($email) > 30 || mb_strlen($email) < 1) {
    echo " Недопустимая длина ";
    exit();
   } 
   


 if ($pass != $pass2) {
    echo "Пароли не совпали";
    exit();
 }

   
?>
