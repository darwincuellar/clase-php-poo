<?php
    class clsCoche{
        // Atributos de la clase coche
        private $modelo="";
        private $color="";
        private $placa="";
        private $marca="";

        // Constructor de la clase
        public function __construct($mo,$co,$pl,$ma){
            $this->modelo = $mo;
            $this->color = $co;
            $this->placa = $pl;
            $this->marca = $ma;
        }
        // get Obtener el valor del atributo
        public function getModelo(){
            return $this->modelo;
        }
        public function getColor(){
            return $this->color;
        }
        public function getPlaca(){
            return $this->placa;
        }
        public function getMarca(){
            return $this->marca;
        }
        // set Métodos que nos permiten asignar valor a los atributos
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }
        public function setColor($color){
            $this->color = $color;
        }
        public function setPlaca($p){
            $this->placa = $p;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }

    }



