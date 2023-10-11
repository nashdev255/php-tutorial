<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-tutorial</title>
</head>
<body>
  <?php
    require_once('user.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $introduce = $_POST['introduce'];

    $user = new User($name, $email, $password, $introduce);

    $user->printUserData();
  ?>
</body>
</html>
