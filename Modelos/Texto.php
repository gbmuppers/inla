<?php

/**
 * Description of Texto
 *
 * @author gibran
 */
class Texto {
    
    private $id_recurso;
    private $rama;
    private $nombre_topico;
    private $id_texto;
    private $url_texto;
    
    function __construct($id_recurso, $rama, $nombre_topico, $id_texto, $url_texto) {
        $this->id_recurso = $id_recurso;
        $this->rama = $rama;
        $this->nombre_topico = $nombre_topico;
        $this->id_texto = $id_texto;
        $this->url_texto = $url_texto;
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

    function get_id_texto() {
        return $this->id_texto;
    }

    function get_url_texto() {
        return $this->url_texto;
    }

    function set_id_texto($id_texto): void {
        $this->id_texto = $id_texto;
    }

    function set_url_texto($url_texto): void {
        $this->url_texto = $url_texto;
    }

}


?>