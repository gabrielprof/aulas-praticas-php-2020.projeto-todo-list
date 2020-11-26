<?php

class Repository{
    
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