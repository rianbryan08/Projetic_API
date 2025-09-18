<?php
namespace generic;
Humberto Patrick Lacerda Ribeiro, 5 months ago | 1 author (Humberto Patrick Lacerda Ribeiro)
class Controller{
    private $arrChamadas=[];
    public function __construct()
    {
        $this->arrChamadas = [
            "cliente/lista" =>new Acao("Cliente","listar"),
            "cliente/formulario" =>new Acao("Cliente","formulario"),
            "cliente/formularioalterar" =>new Acao("Cliente","alterarForm"),
            "cliente/inserir" =>new Acao("Cliente","inserir")
        ];
    }

    public function verificarChamadas($rota){

        if(isset($this->arrChamadas[$rota])){
            //acao da rota
            $acao = $this->arrChamadas[$rota];
            $acao->executar();
            return ;
        }

        echo "Rota não existe!";
    }
}
?>