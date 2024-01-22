<?php
  setcookie('user', $user['name'], time() - 7200, "/");
  header('Location: /');
?>