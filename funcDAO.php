<?php
include_once 'conectabd.php';
include_once 'funcionario.php';

class funcDao{
    private $a;
    private $fdao;
    private $VALOR;
    private $valor;
    private $try;
    private $nfunc;
    private $funcionario;
    public $nome;
    public $email;
    public $senha;
    public $celular;
    public $adm;
    public $funcDAO;


    public function __construct($funcionario) {
        $this->funcionario = $funcionario;
        $this->con = new ConectaBD();
    }

    public function inserir() {
        try{
            $try= "INSERT INTO funcionario(nome,email, senha, nfunc, celular, adm)"
            . " VALUES ('{$this->funcionario->getNome()}','{$this->funcionario->getEmail()}','{$this->funcionario->getSenha()}','{$this->funcionario->getNfunc()}','{$this->funcionario->getCelular()}','{$this->funcionario->getAdm()}')";
        mysqli_query($con->ConectaBD(), $try);

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
    
    
    
    
    
    
    

