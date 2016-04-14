<?php
 
    $Plantel=$_GET['id'];
	$dbh = mysql_connect("mysql5.000webhost.com", "a6493246_hugix4", "unamcglhugix4");
    $db = mysql_select_db("a6493246_alumnos");
 
    $consulta = "SELECT DISTINCT GrupoA from NoSatisfactorios WHERE Plantel = '$Plantel'";
    $query = mysql_query($consulta);
    while ($fila = mysql_fetch_array($query)) {
        echo '<option value="'.$fila['id'].'">'.$fila['GrupoA'].'</option>';
    };
 
?>