<?php
namespace dao\mysql;

use dao\IClienteDAO;
use generic\MysqlFactory;

class ClienteDAO extends MysqlFactory implements IClienteDAO{

    public function listar(){
        $sql = "select id,nome,endereco from clientes";
        $retorno = $this->banco->executar($sql);
        return $retorno;
    }
    public function listarId($id){
        $sql = "select id,nome,endereco from clientes where id=:id";
        $param = [
            ":id" =>$id
        ];
        $retorno = $this->banco->executar($sql,$param);
        return $retorno;
    }
}
?>