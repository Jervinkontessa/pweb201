<?php
require_once("Mahasiswa.php");

require_once("Daftar_mahasiswa.php");
require_once("Daftar_dosen.php");
require_once("Dosen.php");
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

<div class="container">


   <div class="row">


     <div class="col8">
       <?php
       if ( isset( $_GET['nim'] ) ) {
       // pembentukan object $mahasiswa dari class Mahasiswa
       // berdasarkan NIM
       $mahasiswa = new Mahasiswa( $_GET['nim'] );
       ?>
<h1>Mahasiswa</h1>
<table>
     <tr>
       <td class="field">N I M:</td>
       <td class="data"><?= $mahasiswa->nim ?></td>
     </tr>
     <tr>
       <td class="field">Nama Lengkap:</td>
       <td class="data"><?= $mahasiswa->nama ?></td>
     </tr>
     <tr>
       <td class="field">Jenis Kelamin:</td>
       <td class="data"><?= $mahasiswa->jk['gender'] ?></td>
     </tr>

     <tr>
       <td class="field">E-mail:</td>
       <td class="data"><?= $mahasiswa->email ?></td>
     </tr>
     <tr>
       <td class="field">Tanggal masuk:</td>
       <td class="data">
         <?= date('d F Y',strtotime($mahasiswa->tanggalmasuk))?>
       </td>
     </tr>
     <tr>
       <td class="field">Pembimbing Akademik:</td>
       <td class="data"><?= $mahasiswa->dosen_pa->namaLengkap() ?></td>
     </tr>


</table>

<?php
 }
 ?>



      </div>
      <div class="col4">
        <?php
        if ( isset( $_GET['nim']) ) {

        $mahasiswa = new Mahasiswa( $_GET['nim']);
      
        ?>

     <h1>Daftar Mahasiswa dengan PA yang sama</h1>
     <table>
       <thead>
         <tr>
           <th>NIM</th>
           <th>Mahasiswa</th>
         </tr>
       </thead>
       <tbody>


         <?php foreach ($mahasiswa as $mhs) {

            ?>
        <tr>

          <td class="data"><?= $mahasiswa->nim ?></td>
          <td class="data"><?= $mahasiswa->nama ?></td>

        </tr>
        </tr>
      <?php  } ?>
       </tbody>

     </table>

     <?php
     }
     ?>


    </div>

   </div>

 </div>

  </body>
</html>
