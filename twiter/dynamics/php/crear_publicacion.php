<?php
$include = include("./config.php");
//esto conecta con el sql
$con = connect();
//llamar la funcion que conecta el sql
if ($include && $con)
//se encarga de verificar la conexion 
{
    $ID_Usuario =1;
    $descripcion = "desciption";
    $fecha= "01-06-2023";
    $hora= "10:00";
    $corazon=1;
    $n_comentarios=3;
    $n_retuits=5;
    //para peticiones que modifiquen o ingresen datos 
    //$peticion = "INSERT INTO publicacion VALUES(0, 1, '$descripcion', '$fecha', '$hora', $corazon, $n_comentarios, $n_retuits)";
    //pide a sql 
    // $query = mysqli_query($con, $peticion);
    //manda la informacion a la base de datos
    //var_dump($query);
     //si regresa boolean true se ejecuto corectamente caso contrario obtendras false

    //en caso de q las peticiones regresen tablas 
     $sql= "SELECT ID_USUARIO, descripcion FROM publicacion";
     $query= mysqli_query($con, $sql);
    // $datos= mysqli_fetch_assoc($query);
    //procesa la info de la peticion para meterla en un arreglo solo mandara el primer registro que este 
    // tambien se pude hacer con:
    // mysqli_fetch_array, pero es un poco mas "dificil"
    // var_dump($datos);

    while ($row=mysqli_fetch_assoc($query))
    //asociara row con mysqli_fetch_assoc($query)
    //sirve para q mande todos los archivos 
    // ( no de uno en uno )
    {
         echo "<br>";
         echo ($row["descripcion"]);
         //var_dump($row);
    }

}
?>