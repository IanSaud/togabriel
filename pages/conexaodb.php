<?php
 	$conn = mysqli_connect("127.0.0.1", "root","")
 		 or die(" Servidor fora do ar");
	mysqli_select_db($conn, "riobus" )
 		 or die ("Sem acesso ao banco");

?>