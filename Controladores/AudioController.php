<?php
include "../Modelos/Audio.php";

function get_audio($rama,$topico)
{
    require_once("../Librerias/connection.php");
    $conn = open();
    $sql = "SELECT r.id_recurso,r.nombre_topico,r.rama,a.id_audio,a.url_audio 
    FROM recurso AS r 
    INNER JOIN audio AS a 
    ON r.id_recurso = a.id_audio
    WHERE r.nombre_topico like '%".$topico."%'
    AND r.rama like '%".$rama."%';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $audio = new Audio($row['id_recurso'], $row['nombre_topico'], $row['rama'], $row['id_audio'], $row['url_audio']);        
    }else{
        $audio = new Audio(-1,"Not found","Not found",-1,"../Vistas/404.php");
    }
    return $audio;
}

function add_audio($rama,$topico,$link)
{
    require_once("../Librerias/connection.php");
    $conn = open();
    $sql = "insert INTO recurso (nombre_topico,rama) VALUES ('".$topico."','".$rama."');";
    if ($conn->query($sql) == TRUE) {
        $last_id = $conn->insert_id;
        $sql = "insert INTO audio (id_audio,url_audio) VALUES (".$last_id.",'".$link."');";
        if ($conn->query($sql) == TRUE) {
            return true;
        }else{
            return false;
        }
    }

}

?>