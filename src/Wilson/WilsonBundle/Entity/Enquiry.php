<?php
// src/Wilson/WilsonBundle/Entity/Enquiry.php

namespace Wilson\WilsonBundle\Entity;

class Enquiry
{
    protected $nombre;
    protected $email;
    protected $asunto;
    protected $texto;

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAsunto()
    {
        return $this->asunto;
    }

    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;
    }

    public function getTexto()
    {
        return $this->texto;
    }

    public function setTexto($texto)
    {
        $this->texto = $texto;
    }
}