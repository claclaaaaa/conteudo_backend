<?php 
  require "consultar_todos.php";
  require_once "../template/cabecalho.php";
?>

<div class="container">
    <h1>♡ Categorias ♡</h1>
    <hr>

    <div class="text-end">
    <a href="formulario.php" class="btn btn-success">Inserir Novo</a> 
    </div>

    <table class="table" id="tabela_dados">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Cor</th>
      <th scope="col">Ativo</th>
      <th scope="col">Foto</th>
      <th scope="col">Ação</th>


    </tr>
  </thead>
  <tbody>
    <?php foreach($categorias as $categoria): ?>
    <tr>
      <td><?= $categoria->nome ?></td>
      <td><?= $categoria->descricao ?></td>
      <td><?= $categoria->cor ?></td>
      <td><?= $categoria->ativo ?></td>
      <td><img src="../uploads/<?= $categoria->foto ?>" height="45px"></td>
      <td class="text-end" width="18%">
        <a href="excluir.php?id=<?= $categoria->idcategoria ?>" class="btn btn-danger">
        <i class="fa-solid fa-trash"></i> 
        Excluir
      </a>

      <a href="formulario.php?id=<?= $categoria->idcategoria ?>" class="btn btn-primary">
      <i class="fa-solid fa-pen-to-square"></i>
        Atualizar
      </a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
    </table>

</div>

<?php require_once "../template/rodape.php" ?>