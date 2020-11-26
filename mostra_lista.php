<?php

$dsn = "mysql:host=localhost;dbname=oficinaeejm";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);

$stm = $pdo->query("SELECT nome FROM tarefas");

$rows = $stm->fetchAll(PDO::FETCH_NUM);

if(!empty($rows)){
    foreach($rows as $row) {

        echo
        "<tr>
            <td class='texto-padrao' id='" . $row[0] . "'>"
                . $row[0] .
            "</td>
            <td style='text-align:center'>
                <a href='remove.php?item_a_fazer=".$row[0]."'>
                    <button class='btn btn-sm btn-danger' title='Remover'>-</button>
                </a>
            </td>
        </tr>";
    }
}else{
    echo
        "<tr>
            <td class='texto-padrao'> Não há itens registrados.</td>
        </tr>";
}

?>