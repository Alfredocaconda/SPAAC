<?php
#class que acessa ao banco de dados
class StockDao{
    private $conexao;
    #contrutor de classes
    public function __construct(){
        $dados="mysql:host=localhost:3306;dbname=venda";
        $this->conexao=new PDO($dados,'root','');
    }
    public function insert(StockModel $model){
        $sql="INSERT INTO stock(qtd, dataentrada, idp, idf, preco_venda, lucro)
         values (?,?,?,?,?,?)";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->qtd);
        $valor->bindValue(2,$model->dataentrada);
        $valor->bindValue(3,$model->idp);
        $valor->bindValue(4,$model->idf);
        $valor->bindValue(5,$model->preco_venda);
        $valor->bindValue(6,$model->lucro);
        $valor->execute();
    }
    public function update(StockModel $model){
        $sql="UPDATE stock SET qtd=?,dataentrada=?,idp=?,idf=?,preco_venda=?,lucro=?
         WHERE idstock=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->qtd);
        $valor->bindValue(2,$model->dataentrada);
        $valor->bindValue(3,$model->idp);
        $valor->bindValue(4,$model->idf);
        $valor->bindValue(5,$model->preco_venda);
        $valor->bindValue(6,$model->lucro);
        $valor->bindValue(7,$model->idstock);
        $valor->execute();
    }
    public function quantidade(StockModel $model){
            # code...
        $sql="UPDATE Stock SET qtd=qtd+?,lucro=?,idf=? WHERE idstock=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->qtd);
        $valor->bindValue(2,$model->lucro);
        $valor->bindValue(3,$model->idf);
        $valor->bindValue(4,$model->idstock);
        $valor->execute();
    }
 
    public function select($nome){
        $valor=null;
        if($nome == ""){
            $sql="SELECT idstock,idp,idf,nome,descricao,nomec,valor_compra,
            codigo_barra,caducidade,qtd,dataentrada,
            preco_venda,lucro,nomef FROM vstock where qtd>0 order by idstock desc";
            $valor=$this->conexao->prepare($sql);
        }else{
            $sql="SELECT idstock,idp,idf,nome,descricao,nomec,valor_compra,codigo_barra,caducidade,qtd,dataentrada,
            preco_venda,lucro,nomef FROM vstock where qtd>0 and nome like ? or codigo_barra like ? ";
            $valor=$this->conexao->prepare($sql);
            $pesquisar = "%$nome%"; 
            $valor->bindValue(1,$pesquisar);
            $valor->bindValue(2,$pesquisar);
        }
        $valor->execute();
        return $valor->fetchAll(PDO::FETCH_CLASS);
    }
    public function selectStock(){
            $sql="SELECT idstock,idp,idf,nome,descricao,nomec,valor_compra,codigo_barra,caducidade,qtd,dataentrada,
            preco_venda,lucro,nomef FROM vstock ";
            $valor=$this->conexao->prepare($sql);
            $valor->execute();
            return $valor->fetchAll(PDO::FETCH_CLASS);
    }
    public function sele($nome){
        $valor=null;
        if($nome == ""){
            $sql="SELECT idstock,idp,idf,nome,descricao,nomec,valor_compra,codigo_barra,caducidade,qtd,dataentrada,
            preco_venda,lucro,nomef FROM vstock order by idstock desc";
            $valor=$this->conexao->prepare($sql);
        }else{
            $sql="SELECT idstock,idp,idf,nome,descricao,nomec,valor_compra,codigo_barra,caducidade,qtd,dataentrada,
            preco_venda,lucro,nomef FROM vstock where nome like ? or codigo_barra like ? ";
            $valor=$this->conexao->prepare($sql);
            $pesquisar = "%$nome%"; 
            $valor->bindValue(1,$pesquisar);
            $valor->bindValue(2,$pesquisar);
        }
        $valor->execute();
        return $valor->fetchAll(PDO::FETCH_CLASS);
    }
  #selecionar as id para aumentar a quantidade
    public function selectId(int $idstock){
        include_once "Model/StockModel.php";
        $sql="SELECT * FROM vstock WHERE idstock=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $idstock);
        $valor->execute();
        return $valor->fetchObject("StockModel");
    }
}
?>