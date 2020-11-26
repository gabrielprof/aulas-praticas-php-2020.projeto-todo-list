<?php
include 'Repository.php';
$repository = new Repository();

?>
    <form action="edita" method="POST">
    <label class="texto-padrao" for="item_a_fazer">Adicionar tarefa:</label>
    <input type="text" name="item_a_fazer" id="item_a_fazer" placeholder="Nome do item a fazer"/>
    <button class="btn btn-sm btn-success" type="submit">+</button>
    </form>
<?php

function editaAtividade($_GET){
    if($_GET['item_a_fazer'] != ''){
        $repository->edita($_GET['item_a_fazer']);
        require('index.php');
    }
}
?>