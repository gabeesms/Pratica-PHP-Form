<?php
class BancoDados{
    public function getConexao(){
        $conexao = null;
        try{
            $conexao = new PDO('mysql:host=mysql; dbname=CrudPoo', 'root', '');
        }catch (PDOException $erro){
            echo 'Erro, ' . $erro->getMessage();
        }
        return $conexao;
    }
}
?>