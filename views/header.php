<?php
$cssURL  = PUBLIC_URL . 'css' . DS;
$jsURL  = PUBLIC_URL . 'js' . DS;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MVC</title>
  <link rel="stylesheet" href="<?php echo $cssURL ?>style.css">
  <script type="text/javascript" src="<?php echo $jsURL ?>jquery.js"></script>
  <script type="text/javascript" src="<?php echo $jsURL ?>custom.js"></script>
</head>

<body>
  <div class="wrapper">
    <div class="header">
      <h3>Header</h3>
      <a class="index" href="index.php?controller=index&action=index">Home</a>
      <a class="login" href="index.php?controller=login&action=index">Login</a>
      <a class="group" href="index.php?controller=group&action=index">Group</a>
    </div>