<?php
require_once "../model/Conexao.php";

$nomeLivro = $_GET["txt_livro"];
$sql = "INSERT INTO public.book
        (nome, paginas, autor)
        VALUES('$nomeLivro', 100, 'Desconhecido');";

Conexao::exec($sql);

header("Location: ../index.php");