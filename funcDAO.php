<?php
include_once 'conectabd.php';
include_once 'funcionario.php';

class funcDao{
    private $a;
    private $con;
    private $fdao;
    private $VALOR;
    private $valor;
    private $try;
    private $nfunc;
    private $funcionario;
    
        public function __construct() {
        $bd = new ConectaBD();
        $this->con = $bd->ConectaBD();
    }
    
    public function inserir($funcionario) {
        try{
        $try = $this->con->prepare("insert into funcionario "
                . "(nome, email, senha, nfunc, celular, adm) values (:nome, :email, :senha, :nfunc, :celular, :adm)");
        $try->bindValue(":nome", $funcionario->getNome());
        $try->bindValue(":email", $funcionario->getEmail());
        $try->bindValue(":senha", $funcionario->getSenha());
        $try->bindValue(":nfunc", $funcionario->getNfunc());
        $try->bindValue(":celular", $funcionario->getCelular());  
        $try->bindValue(":adm", $funcionario->getAdm());
        echo "$try";
        $try->execute();

        } catch (Exception $ex) {
            echo $ex->getMessage("retorne para o Inserir");
    }}
public function retornar() {
    $try= $this->con->prepare("select * from funcionario");
    $try->execute();
    return $try;
    
}
        public function retornarUn($VAL){
            $try= $this->con->prepare("SELECT * from funcionario where nome like '%nome%'");
            $try->execute();
            return $try->fetchAll(PDO::FETCH_ASSOC);
        }
    
        public function retornarU($VAL) {
             $try= $this->con->prepare("SELECT * from funcionario where nfunc='$VAL'");
            $try->execute();
            return $try->fetchAll(PDO::FETCH_ASSOC);
        }
   
        public function Editar($nome, $email, $senha, $nfunc, $celular) {
            try {
            $VALOR= $this->con->prepare("UPDATE funcionario SET nome=:nome, email=:email, senha=:senha, celular=$celular WHERE nfunc=:nfunc");
            $VALOR->bindValue(":nfunc", $nfunc);
            $VALOR->bindValue(":nome", $nome);
            $VALOR->bindValue(":email", $email);
            $VALOR->bindValue(":senha", $senha);
            $VALOR->bindValue(":celular", celular);
            $VALOR->execute();
        } catch (Exception $ex) {
                        echo $ex->getMessage(" revisa o editar");

        }}

        public function Delete($valor) {
            try{
                $VALOR= $this->con->prepare("delete from funcionario where nfunc=:nfunc");
                $VALOR->bindValue(":nfunc", $valor);
                $VALOR->execute();
                
            } catch (Exception $ex) {
                echo $ex->getMessage("revisa o Delete");
            }
        }
            
        }
    
    
    
    
    
    
    

