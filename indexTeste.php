<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Lista</title>
</head>
<body>
  	<?php
  		$con = @ mysqli_connect("localhost","root","","lojaBD");
  		if ($con == null ) {
          die("Falha ao conectar");	
  		} else {
  		  echo "<a href='createTeste.php'>Cadastrar</a><br/><br/>";
            $tab = mysqli_query($con,"select id, codigo, produto, dataCompra, fornecedor, emailFornecedor, 
            marca, categoria, lote, quantidade, precoCompra, precoVenda, precoUnitario, descricao from produtos");
  		  
  		  while ($lin = mysqli_fetch_assoc($tab)) {
                echo $lin['codigo']." - ".$lin['produto']." - ".$lin['dataCompra']." - ".$lin['fornecedor'].
                " - ".$lin['emailFornecedor']." - ".$lin['marca']." - ".$lin['categoria']." - ".$lin['lote'].
                " - ".$lin['quantidade']." - ".$lin['precoCompra']." - ".$lin['precoVenda']." - ".
                $lin['precoUnitario']." - ".$lin['descricao']." <a href='editTeste.php?id=".$lin['id']."'>Editar</a> 
                <a href='deleteTeste.php?id=".$lin['id']."'>Excluir</a><br/>";
  		  }
  		}
	?>
</body>
</html>