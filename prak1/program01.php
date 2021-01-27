<?php
if (isset($_GET['guest'])) {
    $guestName = $_GET['guest'];
} else {
  $guestName = "jervin";
}


 $today = date('l');
 $todayDate = date("F j, Y, g:i a");

if (isset($_GET['color'])) {
  $backgroundcolor = $_GET['color'];
}else {
  $backgroundcolor = "white";
}


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
    <hr>
    <h3>Ganti nama dengan parameter guest</h3>
    <h3>Ganti warna background dengan parameter color</h3>
  </body>
</html>
