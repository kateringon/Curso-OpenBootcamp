<?php

class Zapato {
    /**
     * @Atrubutos
     */

     private $talla /**public */;
     private $cordones;
     private $color;
     private $material;

     /**
      *Method construct 
      */
    public function __construct()
    {
        $this-> talla = 0;
        $this-> cordones = '';
        $this-> color = null;
        $this-> material = null;

    }

    public function crearZapatos ($ta, $cor, $col, $ma)
    {
        $this-> talla = $ta;
        $this-> cordones = $cor;
        $this-> color = $col;
        $this-> material = $ma;
    }

    public function getColor ()
    {
        return $this->color;
    }
    public function setColor($valor)
    {
        $this->color = $valor;
    }


    public function getmaterial ()
    {
        return $this->material;
    }
    public function setmaterial($valor)
    {
        $this->material = $valor;
    }


    public function gettalla ()
    {
        return $this->talla;
    }
    public function settalla($valor)
    {
        $this->talla = $valor;
    }


    public function getcordones ()
    {
        return $this->cordones;
    }
    public function setcordones($valor)
    {
        $this->cordones = $valor;
    }

}

?>