<?php

class Repository {
    
    public  $config;
    public  $user;
    public  $passwd;
    public  $pdo;
    
    public function __construct()
    {
      $this->config = 'mysql:host=localhost;dbname=oficinaeejm';
      $this->user = 'root';
      $this->passwd = '';
      $this->pdo = new PDO($this->config, $this->user, $this->passwd);
    }
    
    function mostraLista(){
        $stm = $this->pdo->query("SELECT nome FROM tarefas");

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
    }

    function insere($nomeDoItem){
        try {

                $this->pdo->beginTransaction();
                $stm = $this->pdo->exec("INSERT INTO tarefas(nome) VALUES (" . "'" . $nomeDoItem . "'" . ")");

                $this->pdo->commit();

            } catch(Exception $e) {

                $this->pdo->rollback();
                throw $e;
            }
            return null;
        }

    function deleta($nomeDoItem){
        try {

            $this->pdo->beginTransaction();
            $stm = $this->pdo->exec("DELETE FROM tarefas WHERE nome = " . "'" . $nomeDoItem . "'");
    
            $this->pdo->commit();
    
        } catch(Exception $e) {
    
            $this->pdo->rollback();
            throw $e;
        }
        return null;
    }
}
?>