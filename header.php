<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web Service pariwisata Semarang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Web Service</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Browse Obyek <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <?php
          $url='http://semarang.heritagejava.com/generatekategori.php';
          $xml = simplexml_load_file($url);
          foreach($xml->kategori as $xm){
          		echo '<li><a href="#">'.$xm['namaKategori'].'</a></li>';
          	}
          ?>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
  </div>
</nav>

<div class="container">
   Halaman Utama
</div>

</body>
</html>
