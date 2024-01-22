<?php
  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

  if(mb_strlen($login) < 5 || mb_strlen($login) > 128) {
    echo "Недопустимая длина логина (от 5 до хватит)";
    exit();
  } else if(mb_strlen($mail) < 3 || mb_strlen($mail) >64) {
    echo "Недопустимая длина имени (от 2 до 40)";
    exit();
  }
    else if(mb_strlen($name) < 3 || mb_strlen($name) >64) {
    echo "Недопустимая длина имени (от 2 до 40)";
    exit();
  } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 32) {
    echo "Недопустимая длина пароля (от 2 до 32)";
    exit();
  }

  $pass = md5($pass."000passwh0918273645");


  $mysql = new mysqli('sql106.infinityfree.com', 'if0_35738177', 'H1GeHryiRE29ECi', 'if0_35738177_userswebhouse_bd');
  $mysql->query("INSERT INTO `users` (`login`, `mail`, `pass`, `name`) VALUES('$login', '$mail', '$pass', '$name')");

  $mysql->close();
  header('Location: /index.php');
  exit;
?>