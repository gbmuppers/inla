<?php
include "../Controladores/VideoController.php";
include "../Controladores/TextoController.php";
include "../Controladores/AudioController.php";
include "../Librerias/connection.php";

$option = $_POST['function'];

switch ($option) {
    case 'urls':
        get_links($_POST['branch'],$_POST['topic']);
        break;
    default:
        break;
}

function get_links($rama, $topic)
{
    $video = get_video($rama, $topic);
    $audio = get_audio($rama, $topic);
    $texto = get_texto($rama, $topic);
    $jsondata['link_video'] = $video->get_url_video();
    $jsondata['link_audio'] = $audio->get_url_audio();
    $jsondata['link_texto'] = $texto->get_url_texto();
    //$jsondata['codigo'] = $codigo;
    //este header es para el retorno correcto de datos con json
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
}

?>