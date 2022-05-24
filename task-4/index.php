<?php
  if (isset($_POST['login'])) {
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    if ($login === 'login' and $password === 'pass') {
      session_start();
      $_SESSION['sid'] = session_id();
      echo 'Logged in successfully';
      echo '<br>';
      echo '<a href="logout.php">logout</a>';
    } else {
      echo 'Wrong credentials!';
    }
  }
  
  ?>
<!DOCTYPE html>
<html>

<body>
<?php if (empty($_SESSION['sid'])) : ?>
  <form method="post" action="index.php">
    Login: 
    <input type="text" name="login"><br>
    Password: 
    <input type="password" name="password"><br>
    <input type="submit" value="Login">
  </form>
<?php endif; ?>
</body>
</html>