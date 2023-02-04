
<?php
    
$_login = 'admin';
$_password = 'admin';

$_auth = 0; // Если значение равно "0", то пользователь не авторизован. Если значение равно "1" - пользователь авторизован.

        // Проверка на нажатие кнопки
    if (isset($_POST['auth'])) {
        // Проверка на заполненность полей
        if(empty($_POST['login']) || empty($_POST['password'])) {
            $error = "Логин или пароль не введены!";
        }
        // Проверка на подлинность введённых данных
        elseif($_POST['login'] == $_login && $_POST['password'] == $_password){
            $auth = 1;
            $atention = 'Вы успешно вошли в систему!!!';
        }else{
            $error = 'Логин или пароль введены неверно!!';
        }
}

  

    ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>Авторизация</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6"> 
            <?php if($auth == 0):?>
            <form action="" method="post">
                <?php if(isset($error)): ?>
                <div class = 'error'>
                    <?php echo $error;?>
                </div>
                <?php endif;?>
                <br>
                <input type="text" name="login" placeholder = "Введите логин" id="">
                <br>
                <input type="password" name="password" placeholder = "Введите пароль" id="">
                <br>
                <input type="submit" name = 'auth' value="Войти">
            </div>
            </form>
            <?php endif;?>
            <?php if($auth == 1): ?>
            <div class="col-md-12">
                <h1> Контент сервера </h1>
                <?php echo $atention?>
            </div>
            <?php endif;?>
        </div>
    </div>

</body>
</html>