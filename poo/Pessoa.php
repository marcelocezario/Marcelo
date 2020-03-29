<?php

class Pessoa{

    //public
    //private
    //protected -> pode ser utilizada por classes que estão herdando

    protected $nome;

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