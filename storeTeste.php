<?php
    header("location:indexTeste.php");

    $codigo = $_POST['codigo'];
    $produto = $_POST['produto'];
    $dataCompra = $_POST['dataCompra'];
    $fornecedor = $_POST['fornecedor'];
    $emailFornecedor = $_POST['emailFornecedor'];
    $marca = $_POST['marca'];
    $categoria = $_POST['categoria'];
    $lote = $_POST['lote'];
    $quantidade = $_POST['quantidade'];
    $precoCompra = $_POST['precoCompra'];
    $precoVenda = $_POST['precoVenda'];
    $precoUnitario = $_POST['precoUnitario'];
    $descricao = $_POST['descricao'];

    $con = @ mysqli_connect("localhost","root","","lojaBD");

    $query = "INSERT INTO produtos (
        codigo, produto, dataCompra, fornecedor, emailFornecedor, marca, categoria, lote, quantidade, 
        precoCompra, precoVenda, precoUnitario, descricao) VALUES (
            '$codigo','$produto','$dataCompra','$fornecedor','$emailFornecedor','$marca','$categoria',
            '$lote','$quantidade','$precoCompra','$precoVenda','$precoUnitario','$descricao')";
    mysqli_query($con, $query);
    mysql_close();
?>



