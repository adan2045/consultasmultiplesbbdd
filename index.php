<?php

try{
$dsn = "mysql:host=192.168.0.206;dbname=tienda_grosso;charset=utf8";

$usuario = "alumno";

$contrasenia = "alumno";
$opciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
$pdo = new PDO($dsn, $usuario, $contrasenia, $opciones);
} catch(PDOException $e) {
    echo "Error en la conexion; " . $e->getMessage();
}

try{
    //iniciar transaccion 
    $pdo->beginTransaction();
    //ejecutar consulta 
    //$pdo->exec("UPDATE productos SET precio = precio + 100 WHERE id = 1 ");
    //$pdo->exec("UPDATE productos SET precio = precio - 100 WHERE id = 2 ");
    //$pdo->exec("INSERT INTO productos(codigo,precio,descripcion) VALUES (1515,555,'pan') ");
    //$pdo->exec("DELETE from productos where id= 8 ");
    //confirmar transaccion 
    $pdo->commit();

    echo "transaccion completada con exito";
} catch (PDOException $e) {
    $pdo->rollBack();
    echo "error en la transaccion: " . $e->getMessage();
}
$pdo = null;
?>
