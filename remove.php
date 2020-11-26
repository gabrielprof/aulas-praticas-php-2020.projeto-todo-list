<?php
include_once('Repository.php');
$repository = new Repository();

if($_GET['item_a_fazer'] != ''){
    $repository->deleta($_GET['item_a_fazer']);
    require('index.php');
}else{
    require('index.php');
}
?>