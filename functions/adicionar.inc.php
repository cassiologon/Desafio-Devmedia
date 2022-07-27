<?php
require "../config/config.php";

switch($_GET['acao']) {
	case 'adicionar': {
        $titulo = @$_POST['titulo'];
        $conteudo = @$_POST['conteudo'];
        $categoria = @$_POST['categoria'];
        $erroMsg = false;

        if($titulo and $conteudo and $categoria){
            $pdo->query("INSERT INTO noticias (titulo, conteudo, categoria) VALUES ('$titulo', '$conteudo', '$categoria')");
        }else{
            $erroMsg = true;
        }

        echo json_encode(array('success' => !$erroMsg, 'erroMsg' => $erroMsg));
    }
	break;

    case 'editar': {
        $id = @$_POST['id'];
        $titulo = @$_POST['titulo'];
        $conteudo = @$_POST['conteudo'];
        $categoria = @$_POST['categoria'];
        $erroMsg = false;

        if($titulo and $conteudo and $categoria){
            $pdo->query("UPDATE noticias SET titulo = '$titulo', conteudo = '$conteudo', categoria = '$categoria' WHERE id = $id");
        }else{
            $erroMsg = true;
        }

        echo json_encode(array('success' => !$erroMsg, 'erroMsg' => $erroMsg));
    }
    break;

    case 'delete': {
        $id = @$_POST['id'];
        $pdo->query("DELETE FROM noticias WHERE id = $id");
        echo json_encode(array('success' => true));
    }
    break;
}