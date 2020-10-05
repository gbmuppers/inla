<?php
include "../Modelos/Texto.php";

function get_texto($rama,$topico)
{
    require_once("../Librerias/connection.php");
    $conn = open();
    $sql = "SELECT r.id_recurso,r.nombre_topico,r.rama,t.id_texto,t.url_texto
    FROM recurso AS r 
    INNER JOIN texto AS t 
    ON r.id_recurso = t.id_texto
    WHERE r.nombre_topico like '%".$topico."%' 
    AND r.rama like '%".$rama."%';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $texto = new Texto($row['id_recurso'], $row['nombre_topico'], $row['rama'], $row['id_texto'], $row['url_texto']);        
    }else{
        $texto = new Texto(-1,"Not found","Not found",-1,"../Vistas/404.php");
    }
    return $texto;
}

function add_texto($rama,$topico,$link)
{
    require_once("../Librerias/connection.php");
    $conn = open();
    $sql = "insert INTO recurso (nombre_topico,rama) VALUES ('".$topico."','".$rama."');";
    if ($conn->query($sql) == TRUE) {
        $last_id = $conn->insert_id;
        $sql = "insert INTO texto (id_texto,url_texto) VALUES (".$last_id.",'".$link."');";
        if ($conn->query($sql) == TRUE) {
            return true;
        }else{
            return false;
        }
    }

}


?>