<?php
include "../Modelos/Video.php";

function get_video($rama,$topico)
{
    require_once("../Librerias/connection.php");
    $conn = open();
    $sql = "SELECT r.id_recurso,r.nombre_topico,r.rama,v.id_video,v.url_video 
    FROM recurso AS r 
    INNER JOIN video AS v 
    ON r.id_recurso = v.id_video 
    WHERE r.nombre_topico like '%".$topico."%' 
    AND r.rama like '%".$rama."%';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $video = new Video($row['id_recurso'], $row['nombre_topico'], $row['rama'], $row['id_video'], $row['url_video']);        
    }else{
        $video = new Video(-1,"Not found","Not found",-1,"../Vistas/404.php");
    }
    return $video;
}

function add_video($rama,$topico,$link)
{
    require_once("../Librerias/connection.php");
    $conn = open();
    $sql = "insert INTO recurso (nombre_topico,rama) VALUES ('".$topico."','".$rama."');";
    if ($conn->query($sql) == TRUE) {
        $last_id = $conn->insert_id;
        $sql = "insert INTO video (id_video,url_video) VALUES (".$last_id.",'".$link."');";
        if ($conn->query($sql) == TRUE) {
            return true;
        }else{
            return false;
        }
    }

}




?>