<?php

class Pessoa{

    //public
    //private
    //protected

    private $nome;

    public function __construct($tmpNome)
    {
        $this->nome = $tmpNome;
    }

    public function setNome($novoNome){
        $this->nome = $novoNome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function falarNome(){
        echo $this->nome;
    }

}