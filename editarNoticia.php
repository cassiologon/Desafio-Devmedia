<?php
    include 'header.php';
    include 'config/config.php';

    $id = @$_GET['id'];
    $sql = $pdo->query("SELECT * FROM noticias WHERE id = $id");
    
    $noticia = $sql->fetch(PDO::FETCH_ASSOC);  
?>
<main role="main" class="container">
  <div class="row editar">
    <div class="col-sm-10">
      <div class="card">
        <div class="card-header">
          Editar Notícia
        </div>
        <div class="card-body">
          <form method="POST" id="editar">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="form-group">
                <label>Titulo:</label>
                <input type="text" class="form-control" name="titulo" value="<?= $noticia['titulo']; ?>" required>
            </div>

            <div class="form-group">
                <label>Conteudo:</label>
                <input type="text" class="form-control" name="conteudo" value="<?= $noticia['conteudo']; ?>" required>
            </div>

            <div class="form-group">
                <label>Categoria:</label>
                <input type="text" class="form-control" name="categoria" value="<?= $noticia['categoria']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary" id="btnSubmit">editar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
    include 'footer.html';
?>