<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MVC</title>
  <link rel="stylesheet" href="public/css/style.css">
  <script type="text/javascript" src="public/js/jquery.js"></script>
  <script type="text/javascript" src="public/js/custom.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    var controller = '<?php echo (isset($_GET['controller'])) ? $_GET['controller'] : 'index'; ?>'
    $('div.header a.' + controller).addClass('active');
  });
  </script>
</head>

<body>
  <div class="wrapper">
    <div class="header">
      <h3>Header</h3>
      <a class="index" href="index.php?controller=index&action=index">Home</a>
      <a class="login" href="index.php?controller=login&action=index">Login</a>
      <a class="group" href="index.php?controller=group&action=index">Group</a>
    </div>