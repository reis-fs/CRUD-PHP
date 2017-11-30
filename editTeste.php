<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
    <?php
    
    $con = @ mysqli_connect("localhost","root","","lojaBD");
    $ps = mysqli_prepare($con,"select codigo, produto, dataCompra, fornecedor, emailFornecedor, 
    marca, categoria, lote, quantidade, precoCompra, precoVenda, precoUnitario, descricao from produtos 
    where id=?");

    mysqli_stmt_bind_param($ps,"i",$_GET['id']);
    mysqli_stmt_execute($ps);

    mysqli_stmt_bind_result($ps,$codigo,$produto,$dataCompra,$fornecedor,$emailFornecedor,$marca,$categoria,
    $lote,$quantidade,$precoCompra,$precoVenda,$precoUnitario,$descricao);

    mysqli_stmt_fetch($ps);
    ?>

    <form action="updateTeste.php" method="post">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="number" name="id" value="<?= $_GET['id'] ?>"></td>
            </tr> 
            <tr>
                <td>Codigo</td>
                <td><input type="text" name="codigo" value="<?= $codigo ?>"></td>
            </tr> 
            <tr>
                <td>Produto</td>
                <td><input type="text" name="produto" value="<?= $produto ?>"></td>
            </tr>
            <tr>
                <td>Data</td>
                <td><input type="text" name="dataCompra" value="<?= $dataCompra ?>"></td>
            </tr> 
            <tr>
                <td>Fornecedor</td>
                <td><input type="text" name="fornecedor" value="<?= $fornecedor ?>"></td>
            </tr> 
            <tr>
                <td>Email Fornecedor</td>
                <td><input type="text" name="emailFornecedor" value="<?= $emailFornecedor ?>"></td>
            </tr> 
            <tr>
                <td>Marca</td>
                <td><input type="text" name="marca" value="<?= $marca ?>"></td>
            </tr> 
            <tr>
                <td>Categoria</td>
                <td><input type="text" name="categoria" value="<?= $categoria ?>"></td>
            </tr> 
            <tr>
                <td>Lote</td>
                <td><input type="text" name="lote" value="<?= $lote ?>"></td>
            </tr> 
            <tr>
                <td>Quantidade</td>
                <td><input type="text" name="quantidade" value="<?= $quantidade ?>"></td>
            </tr> 
            <tr>
                <td>Preço Compra</td>
                <td><input type="text" name="precoCompra" value="<?= $precoCompra ?>"></td>
            </tr> 
            <tr>
                <td>Preço Venda</td>
                <td><input type="text" name="precoVenda" value="<?= $precoVenda ?>"></td>
            </tr> 
            <tr>
                <td>Preço Unitario</td>
                <td><input type="text" name="precoUnitario" value="<?= $precoUnitario ?>"></td>
            </tr> 
            <tr>
                <td>Descrição</td>
                <td><input type="text" name="descricao" value="<?= $descricao ?>"></td>
            </tr>  
            <tr>
                <td><input type="submit" value="Cadastrar"></td>
                <td><input type="reset" value="Limpar"/></td>
            </tr>    
        </table>
    </form>
</body>
</html>