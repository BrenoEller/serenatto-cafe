<?php

  require "src/connection-bd.php";
  require "src/Model/Products.php";
  require "src/Repositorio/ProdutoRepositorio.php";

  $produtoRep = new ProdutoRepositorio($pdo);
  $produtoRep->excluirProduto($_POST['id']);

  header("Location: admin.php");