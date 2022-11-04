<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <h1>Регистрация</h1>
    <form action="check.php" method="post">    
        <div>
        <input type="text" name="name" id="name" placeholder="Введите Имя">
        </div>
        <div>
        <input type="tel" name="phone" id="phone" placeholder="Введите номер телефона" pattern="[\+]\d{1}\s[\(]\d{3}[\)]\s\d{3}[\-]\d{2}[\-]\d{2}">
        </div>
        <div>
        <input type="email" name="email" id="email" placeholder="Введите email">
        </div>   
        <div>
        <input type="password" name="pass" id="pass" placeholder="Введите пароль">
        </div>   
        <div>
        <input type="password" name="pass2" id="pass2" placeholder="Повторите пароль">
        </div>    
        <div>
        <input type="submit" name="reg" value="Зарегистрироваться">
        </div>
    </form>
</body>
</html>