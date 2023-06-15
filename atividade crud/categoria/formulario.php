<?php 
require_once "consultar_por_id.php";
require_once "../template/cabecalho.php";
?>
<div class="container">
    <h1>Categorias ♡</h1>
    <hr>

    <form action="<?php echo isset($categoria) ? 
     "atualizar.php":
     "inserir.php"; ?>"
      method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="idcategoria" value="<?php echo $categoria->idcategoria ?? "" ;?>" ><br>

        <label class="form-label">Nome</label><br>
        <input class="form-control" type="text" name="nome" value="<?php echo $categoria->nome ?? "" ;?>" ><br>

        <label class="form-label">Descrição</label><br>
        <textarea class="form-control" name="descricao"><?php echo $categoria->descricao ?? "" ;?></textarea><br>

        <label class="form-label">Cor</label><br>
        <input class="form-control" type="text" name="cor" value="<?php echo $categoria->cor ?? "" ;?>" ><br>

        <label class="form-label">Ativo</label><br>
        <input class="form-control" type="text" name="ativo" value="<?php echo $categoria->ativo ?? "" ;?>" ><br>

        <label class="form-label">Foto</label><br>
        <input class="form-control" type="file" name="foto"><br>

        <br>
        <button type="submit" class="btn btn-info">Inserir</button>
        
    </form>


</div>

<?php require_once "../template/rodape.php" ?>