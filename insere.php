<?php
include_once('Repository.php');
$repository = new Repository();

if($_POST['item_a_fazer'] != ''){
    $repository->insere($_POST['item_a_fazer']);
    require('index.php');
}else{
    require('index.php');
}
?>