 <?php
class dataBase{
    public static function conexion(){
        $conexion = mysqli_connect("localhost","root","","gameCard") or die("Problemas con la conexión");
        return $conexion;
    }
    public static function close($conexion){
        mysqli_close($conexion);
    }
}