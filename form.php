<form method="post">
    <label>Nome</label>
    <input type="text" name="nome">
    <label>Telefone</label>
    <input type="text" name="telefone">

    <button type="submit">Salvar</button>
</form>

<?php
    if($_POST){
        require 'classes/Contato.php';

        $contato = new Contato($conexao);
        $contato->nome = $_POST['nome'];
        $contato->telefone = $_POST['telefone'];
        
        if($contato->criar()){
            echo "Contato criado com sucesso!!!!!!!!!";
        }else{
            echo "erro ao cadastrar!";
        }

    }
?>