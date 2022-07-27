<?php
  include 'header.php';
  require 'config/config.php';

  $sql = '';
  $pesquisa = @$_GET['pesquisa'];
  if($pesquisa) $sql = "AND titulo LIKE '%$pesquisa%' OR categoria LIKE '%$pesquisa%'";
  
  $noticias = [];
  $sql = $pdo->query("SELECT * FROM noticias WHERE 1=1 $sql");
  if($sql->rowCount() > 0){
    $noticias = $sql->fetchAll(PDO::FETCH_ASSOC);
  }
?>
<main role="main" class="container">
  <div class="row">
    <?php foreach($noticias as $noticia): ?>
      <div class="col-sm-4 cardPrincipal">
        <div class="card noticias">
          <div class="card-body">
            <h5 class="card-title"><?= $noticia['titulo']; ?></h5>
            <p class="card-text"><?= mb_strimwidth($noticia['conteudo'], 0, 187, "..."); ?></p>
          </div>
          <div class="card-footer">
            <a href="noticia.php?id=<?= $noticia['id']; ?>" class="btn btn-secondary">&emsp; &emsp;  Acessar &emsp; &emsp;</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>
<?php
    include 'footer.html';
?>