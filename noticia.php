<?php
    include 'header.php';
    require 'config/config.php';
    
    $noticias = '';
    $sql = $pdo->query("SELECT * FROM noticias WHERE id = ".$_GET['id'] ."");
    if($sql->rowCount() > 0){
        $noticias = $sql->fetch(PDO::FETCH_OBJ);
    }

?>
<section>
  <div class="row adicionar">
    <div class="col-sm-8">
      <div class="card">
        <div class="card-header">
            <h3><?= $noticias->titulo; ?></h3>
        </div>
        <div class="card-body">
            <div class="conteudo"><?= $noticias->conteudo; ?></div>
        </div>
        <div class="card-footer">
            <span>categoria <?= $noticias->categoria; ?></span>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    include 'footer.html';
?>