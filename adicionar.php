<?php
    include 'header.php';
?>
<section>
  <div class="row adicionar">
    <div class="col-sm-10">
      <div class="card">
        <div class="card-header">
          Adicionar Notícia
        </div>
        <div class="card-body">
          <form method="POST" id="adicionar">
            <div class="form-group">
                <label>Titulo:</label>
                <input type="text" class="form-control" name="titulo" required>
            </div>

            <div class="form-group">
                <label>Conteudo:</label>
                <input type="text" class="form-control" name="conteudo" required>
            </div>

            <div class="form-group">
                <label>Categoria:</label>
                <input type="text" class="form-control" name="categoria" required>
            </div>
            <button type="submit" class="btn btn-primary" id="btnSubmit">adicionar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    include 'footer.html';
?>