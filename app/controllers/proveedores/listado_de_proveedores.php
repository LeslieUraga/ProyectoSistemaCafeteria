<?php
    
$sql_proveedores = "SELECT * FROM proveedores";
$query_proveedores = $pdo->prepare($sql_proveedores);
$query_proveedores->execute();
$proveedores_controller = $query_proveedores->fetchAll(PDO::FETCH_ASSOC);
?>