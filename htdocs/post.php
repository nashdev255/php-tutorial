<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-tutorial</title>
</head>
<body>
  <?php
    $name = $_POST['name'];
    $text = $_POST['text'];

    echo "<h1>{$name}</h1>";
    echo "<p>{$text}</p>";
  ?>
</body>
</html>
