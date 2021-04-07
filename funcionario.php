<?php
include_once 'conectabd.php';

class funcionario{
    private $nome;
    private $email;
    private $senha;
    private $nfunc;
    private $celular;
    private $adm;
    
    public function __construct($nome, $email, $senha, $nfunc, $celular, $adm) {
        $bd= new ConectaBD();
        $this->con=$bd->ConectaBD();
        
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getNfunc() {
        return $this->nfunc;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function getAdm() {
        return $this->adm;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setNfunc($nfunc) {
        $this->nfunc = $nfunc;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function setAdm($adm) {
        $this->adm = $adm;
    }


}
