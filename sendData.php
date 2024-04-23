<?php
include "connect.php";

$textData = $_POST["textData"];
$textData = htmlspecialchars($textData);
mysqli_query($db, "INSERT INTO `comments` (`textdata`) VALUES ('$textData')");
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>