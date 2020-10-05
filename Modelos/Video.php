<?php
/**
 * Description of Video
 *
 * @author gibran
 */
class Video{
    
    private $id_recurso;
    private $rama;
    private $nombre_topico;
    private $id_video;
    private $url_video;
    
    function __construct($id_recurso, $rama, $nombre_topico, $id_video, $url_video) {
        $this->id_recurso = $id_recurso;
        $this->rama = $rama;
        $this->nombre_topico = $nombre_topico;
        $this->id_video = $id_video;
        $this->url_video = $url_video;
    }

    function get_id_recurso() {
        return $this->id_recurso;
    }

    function get_rama() {
        return $this->rama;
    }

    function get_nombre_topico() {
        return $this->nombre_topico;
    }

    function set_id_recurso($id_recurso): void {
        $this->id_recurso = $id_recurso;
    }

    function set_rama($rama): void {
        $this->rama = $rama;
    }

    function set_nombre_topico($nombre_topico): void {
        $this->nombre_topico = $nombre_topico;
    }
    
    function get_id_video() {
        return $this->id_video;
    }

    function get_url_video() {
        return $this->url_video;
    }

    function set_id_video($id_video): void {
        $this->id_video = $id_video;
    }

    function set_url_video($url_video): void {
        $this->url_video = $url_video;
    }


}


?>