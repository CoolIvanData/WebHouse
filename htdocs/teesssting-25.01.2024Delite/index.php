<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container  mt-4">
        <?php
        if($_COOKIE['user'] == ''):
        ?>
        <!-- <div class="row"> -->
        
            <div class="col">
                <h1>Регистрация</h1>
                <form action="validation-form/check.php" method="post">
                    <input type="text" class="from-control" name="login" id="login" placeholder="Ведите логин"><br>
                    <input type="text" class="from-control" name="mail" id="mail" placeholder="Ведите почту"><br>
                    <input type="text" class="from-control" name="name" id="name" placeholder="Ведите имя"><br>
                    <input type="password" class="from-control" name="pass" id="pass" placeholder="Ведите пароль"><br>
                    <button class="btn btn-succes">Зарегистрироваться</button>
                </form>
            </div>
            <div class="col">
                <h1>Авторизация</h1>
                <form action="validation-form/auth.php" method="post">
                    <input type="text" class="from-control" name="login" id="login" placeholder="Ведите логин"><br>
                    <input type="text" class="from-control" name="mail" id="mail" placeholder="Ведите почту"><br>
                    <input type="password" class="from-control" name="pass" id="pass" placeholder="Ведите пароль"><br>
                    <button class="btn btn-succes">Авторизоватся</button>
                </form>
            </div>
            <?php else: ?>
                <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="exit.php">здесь</p>
            <?php endif; ?>

        <!-- </div> -->
        
    </div>
</body>

</html>

<!-- made by CoolIvanData -->