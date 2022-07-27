<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Devmedia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <style>
    body{
      background-color: #ededed;
      min-height: 100vh; 
      display: flex; 
      flex-direction: column;
      margin: 0;
    }
    .navbar .dropdown-toggle, .navbar .dropdown-menu a {
      cursor: pointer;
    }
    .navbar-dark .navbar-nav .nav-link {
      color: rgb(255 255 255);
    }
    .navbar .dropdown-item:focus, .navbar .dropdown-item:hover {
      color: #16181b;
      text-decoration: none;
      background-color: #f8f9fa;
    }
    @media (min-width: 767px) {
      .navbar .dropdown-toggle:not(.nav-link)::after {
          display: inline-block;
          width: 0;
          height: 0;
          margin-left: .5em;
          vertical-align: 0;
          border-bottom: .3em solid transparent;
          border-top: .3em solid transparent;
          border-left: .3em solid;
      }
    }
    .nav-item {
      margin: 0 15px;
    }
    .cardPrincipal{
      height: 310px;
    }
    .noticias{
      height: 290px;
    }
    .card-footer{
      border-top: 0;
      background-color: #fff;
      display: flex;
      justify-content: center;
    }
    .adicionar{
      justify-content: center;
      margin-left: 0px;
      margin-right: 0px;
    }
    footer {
      display: flex;
      justify-content: center;
      margin-top: auto;
      background-color: #6c757d!important;
      color: #fff;
    }
    p.copyright {
      margin: 10px;
    }
    .conteudo{
      font-size: 19px;
    }
  </style>
  <div class="navbar navbar-expand-lg navbar-dark bg-secondary mb-4" role="navigation">
    <a class="navbar-brand" href="./">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adicionar.php">Cadastrar Noticias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="exibirNoticias.php">Exibir Noticias</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <div class="input-group">
          <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search" name="pesquisa" style="border-right: none;" value="<?= @$_GET['pesquisa'] ?>">
          <div class="input-group-append">
            <div class="input-group-text" style="background-color: #FFF"><i class="fas fa-search"></i></div>
          </div>
        </div>
      </form>
    </div>
  </div>