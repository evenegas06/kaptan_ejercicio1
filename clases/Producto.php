<?php

/**
 * Modelo Producto
 * 
 * @property int     $id;
 * @property string  $nombre;
 * @property string  $descripcion;
 * @property float   $precio;
 * @property int     $existencias;
 * @property string  $imagen;
 */
class Producto {

    private int     $id;
    private string  $nombre;
    private string  $descripcion;
    private float   $precio;
    private int     $existencias;
    private string  $imagen;

    /**
     * @param int       $id
     * @param string    $nombre
     * @param string    $descripcion
     * @param float     $precio
     * @param int       $existencias
     * @param string    $imagen
     */
    public function __construct(
        int     $id,
        string  $nombre,
        string  $descripcion,
        float   $precio,
        int     $existencias,
        string  $imagen,
    ) {
        $this->id           = $id;
        $this->nombre       = $nombre;
        $this->descripcion  = $descripcion;
        $this->precio       = $precio;
        $this->existencias  = $existencias;
        $this->imagen       = $imagen;
    }

    /**
     * @param int $id
     * @return void
     */
    public function setId(int $id) {
        $this->id = $id;
    }

    /**
     * @param string $nombre 
     * @return void
     */
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    /**
     * @param string $descripcion
     * @return void
     */
    public function setDescripcion(string $descripcion) {
        $this->descripcion = $descripcion;
    }

    /**
     * @param float $precio
     * @return void
     */
    public function setPrecio(float $precio) {
        $this->precio = $precio;
    }

    /**
     * @param int $existencias 
     * @return void
     */
    public function setExistencias(int $existencias) {
        $this->existencias = $existencias;
    }

    /**
     * @param string $imagen_url
     * @return void
     */
    public function setImagen(string $imagen_url) {
        $this->imagen = $imagen_url;
    }

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * @return string
     */
    public function getDescripcion() {
        return $this->descripcion;
    }

    /**
     * @return float
     */
    public function getPrecio() {
        return $this->precio;
    }

    /**
     * @return int
     */
    public function getExistencias() {
        return $this->existencias;
    }

    /**
     * @return string
     */
    public function getImagen() {
        return $this->imagen;
    }
}


