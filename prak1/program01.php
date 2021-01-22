<?php
 $guestName = $_GET['guest'];
 $today = date('l');
 $todayDate = date("F j, Y, g:i a");

 $backgroundcolor = $_GET['color'];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body bgcolor=<?= $backgroundcolor ?> >
    <h1>Program 01</h1>
    <p>today is <?php echo $todayDate ?></p>
    <hr>

    <h2>Hello, <?php echo $guestName ?>;</h2>
    <h3>Happy <?php echo $today ?></h3>
  </body>
</html>
