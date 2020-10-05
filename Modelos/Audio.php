<?php
/**
 * Description of Audio
 *
 * @author gibran
 */
class Audio {
    
    private $id_recurso;
    private $rama;
    private $nombre_topico;
    private $id_audio;
    private $url_audio;
    
    function __construct($id_recurso, $rama, $nombre_topico, $id_audio, $url_audio) {
        $this->id_recurso = $id_recurso;
        $this->rama = $rama;
        $this->nombre_topico = $nombre_topico;
        $this->id_audio = $id_audio;
        $this->url_audio = $url_audio;
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
    
    function get_id_audio() {
        return $this->id_audio;
    }

    function get_url_audio() {
        return $this->url_audio;
    }

    function set_id_audio($id_audio): void {
        $this->id_audio = $id_audio;
    }

    function set_url_audio($url_audio): void {
        $this->url_audio = $url_audio;
    }
    
}

?>