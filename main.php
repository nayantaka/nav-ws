<?php
  if(isset($_REQUEST['k'])){
    $k = $_REQUEST['k'];
  $url='http://semarang.heritagejava.com/generatexml.php?kategori='.$k;
  $xml = simplexml_load_file($url);
?>
<div class="row">
  <div class="col-sm-6">
    <?php echo '<img class="img-responsive" src="'.$xml->marker['foto'].'">';?>
  </div>
  <div class="col-sm-6">
    <?php echo '<h2>'.$xml->marker['nama'].'</h2>';
          echo $xml->marker['ket'];
    ?>
  </div>
</div>
<?php
  }
?>
