<?php 

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


?>