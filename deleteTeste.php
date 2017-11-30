<?php

	header("location:indexTeste.php");
	
	$con = @ mysqli_connect("localhost","root","","lojaBD");
  	if ($con == null ) {
        die("Falha ao conectar");	
  	} else {
  	    mysqli_query($con,"delete from produtos where id=".$_GET['id']);
  	}
?>