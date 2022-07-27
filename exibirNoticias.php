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
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <?php foreach($noticias as $noticia): ?>
                        <tr>
                            <th>Id</th>
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td scope="row"><?= $noticia['id']; ?></td>
                            <td><?= $noticia['titulo']; ?></td>
                            <td><?= $noticia['categoria']; ?></td>
                            <td>
                                <a href="editarNoticia.php?id=<?= $noticia['id']; ?>" class="btn btn-primary active" role="button" aria-pressed="true">Editar</a>
                                <button class="btn btn-danger active" role="button" onclick="deleteNoticia(<?= $noticia['id']; ?>)" aria-pressed="true">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</main>
<?php
    include 'footer.html';
?>