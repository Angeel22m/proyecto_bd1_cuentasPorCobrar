<?php

class PruebaModel{

    static public function mostrarPrueba(){

        
        // Ejemplo de uso
        $conn = Conection::odbcConnect(); // Para conectar sin SSL
        // $conn = odbcConnect(true); // Para conectar con SSL

        if ($conn) {
            echo "Conexión satisfactoria.";

            // Desconectar
            Conection::odbcDisconnect($conn);
        } else {
            echo "Conexión errónea.";
        }


        /*
        $conn = db2Connect();

        if ($conn) {
            echo "Conexión exitosa a la base de datos DB2.\n";

            // Realizar una consulta
            $sql = "SELECT * FROM persona";
            $stmt = db2_exec($conn, $sql);

            if ($stmt) {
                while ($row = db2_fetch_assoc($stmt)) {
                    print_r($row);
                }
            } else {
                echo "Error en la consulta: " . db2_stmt_errormsg();
            }

            // Desconectar de la base de datos
            db2Disconnect($conn);
        }

        */

        /*
        $script = Conection::conect()->prepare("SELECT * FROM persona");

        $script->execute();
        $result = $script->fetchAll(PDO::FETCH_CLASS);
        $script->closeCursor();
        $script = null;
        return $result;
        */
    }
}