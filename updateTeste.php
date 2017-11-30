<?php
  
    header("location:indexTeste.php");
	// ver comentário em index.php sobre mysqli_connect
	$con = @ mysqli_connect("localhost","root","","lojaBD");
    if ($con == null ) {
        die("Falha ao conectar");	
    } else {
        $ps = mysqli_prepare($con,"UPDATE produtos SET codigo=?, produto=?, dataCompra=?, fornecedor=?, 
        emailFornecedor=?, marca=?, categoria=?, lote=?, quantidade=?, precoCompra=?, precoVenda=?, 
        precoUnitario=?, descricao=? where id=?");
        mysqli_stmt_bind_param($ps,"sssssssssssssi",$_POST['codigo'],$_POST['produto'],$_POST['dataCompra'],
        $_POST['fornecedor'],$_POST['emailFornecedor'],$_POST['marca'],$_POST['categoria'],$_POST['lote'],
        $_POST['quantidade'],$_POST['precoCompra'],$_POST['precoVenda'],$_POST['precoUnitario'],$_POST['descricao'],
        $_POST['id']);
        mysqli_stmt_execute($ps);
    }
?>