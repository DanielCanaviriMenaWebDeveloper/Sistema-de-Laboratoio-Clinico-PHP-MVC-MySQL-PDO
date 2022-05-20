<?php 

    /* 
    Ejemplo para una conexión PDO en PHP de la documentación. 
    https://www.php.net/manual/es/pdo.construct.php */
    
    $dns = "mysql:dbname=curso_laboratorio;host=localhost";
    $usuario = "root";
    $contraseña = "";

    try {
        $gbd = new PDO($dns, $usuario, $contraseña);
        echo "<h1 style='color: white; background-color: black; padding: 10px; width: 250px; box-shadow: 2px 2px 5px green;'>Conexión Exitosa </h1>";
    } catch (PDOException $e) {
        echo "<h1 style='color: white; background-color: black; padding: 10px; width: 250px; box-shadow: 2px 2px 5px red;'>Fallo la conexión: </h1>" . $e->getMessage();
    }

    /*
    class conexionBD
    {
        public function conexionPDO() {
            $host = "localhost";
            $dbName = "curso_laboratorio";
            $usuario = "root";
            $contraseña = "";

            try {
                $pdo = new PDO("mysql:host=$host;dbname=$dbName", $usuario, $contraseña);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->exec("set names utf8");
                return $pdo;
            } catch (Exception $e) {
                echo "La conexión ha fallado";
            }
        }

        function cerrar_conexion() {
            $this->$pdo=null;
        }
    }

    */


?>