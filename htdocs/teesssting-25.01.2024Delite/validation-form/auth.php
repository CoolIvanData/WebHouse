<?php
  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

  $pass = md5($pass."000passwh0918273645");

  $mysql = new mysqli('sql106.infinityfree.com', 'if0_35738177', 'H1GeHryiRE29ECi', 'if0_35738177_userswebhouse_bd');

  $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'AND `pass` = '$pass' AND `mail` = '$mail'");
  $user = $result->fetch_assoc();
  if(count($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
  }
  
  setcookie('user', $user['name'], time() + 7200, "/");  

  $mysql->close();

  header('Location: https://www.webhouse.rf.gd/teesssting-25.01.2024Delite/index.php');
?>