<?php 
require_once "consultar_por_id.php";
require_once "../template/cabecalho.php";
require_once "../template/menu_restrito.php";
?>
<div class="container">
    <h1>Categorias ♥</h1>
    <hr>

    <form action="<?php echo isset($categoria) ? 
     "atualizar.php":
     "inserir.php"; ?>"
      method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="idcategoria" value="<?php echo $categoria->idcategoria ?? "" ;?>" ><br>

        <label>Nome</label><br>
        <input type="text" name="nome" value="<?php echo $categoria->nome ?? "" ;?>" ><br>

        <label>Descrição</label><br>
        <input type="text" name="descricao" value="<?php echo $categoria->descricao ?? "" ;?>" ><br>

        <label>Cor</label><br>
        <input type="text" name="cor" value="<?php echo $categoria->cor ?? "" ;?>" ><br>

        <label>Ativo</label><br>
        <input type="text" name="ativo" value="<?php echo $categoria->ativo ?? "" ;?>" ><br>

        <label>Foto</label><br>
        <input type="file" name="foto"><br>
        <br>
        <button type="submit">Inserir</button>
        
    </form>


</div>

<?php require_once "../template/rodape.php" ?>