<?php

class Conection {
    private $conect;

    public function __construct() {
        $this->conect = new PDO("sqlite:database/database.sqlite");
        $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if (!file_exists("database/database.sqlite")) {
            touch("database/database.sqlite");
            try{
                $this->conect->exec(
                "CREATE TABLE tb_avaliacao (
                    ava_id INTEGER PRIMARY KEY AUTOINCREMENT,
                    ava_pergunta1 INTEGER NOT NULL,
                    ava_pergunta2 INTEGER NOT NULL,
                    ava_pergunta3 INTEGER NOT NULL,
                    ava_pergunta4 INTEGER NOT NULL,
                    ava_pergunta5 INTEGER NOT NULL,
                    ava_observacao VARCHAR(500)
                )"
            );
            }catch (PDOException $e) {
                echo "Erro no banco: ".$e;
            }
            
        }

        // try {
        //     $dados = $this->conect->query("SELECT name FROM sqlite_master WHERE type='table' AND name='$this->table'");
        //     echo "Primeiro Try";
        //     // Se não houver exceção, a tabela já foi criada
        // } catch (PDOException $e) {
        //     echo "Segundo Try";
        //     if ($e->getCode() === 'HY000') {
        //         $this->conect->exec(
        //             "CREATE TABLE $this->table (
        //                 ava_id INTEGER PRIMARY KEY AUTOINCREMENT,
        //                 ava_pergunta1 INTEGER NOT NULL,
        //                 ava_pergunta2 INTEGER NOT NULL,
        //                 ava_pergunta3 INTEGER NOT NULL,
        //                 ava_pergunta4 INTEGER NOT NULL,
        //                 ava_pergunta5 INTEGER NOT NULL,
        //                 ava_observacao VARCHAR(500)
        //             )"
        //         );
        //         echo "Segundo Try";

        //     } else {
        //         // Trate outras exceções aqui
        //         echo "Erro no banco: " . $e->getMessage();
        //     }
        // }
    }

    public function save($respostas) {
        $p1 = $respostas['p1'];
        $p2 = $respostas['p2'];
        $p3 = $respostas['p3'];
        $p4 = $respostas['p4'];
        $p5 = $respostas['p5'];
        $observacao = $respostas['observacao'];

        try {
            $stmt = $this->conect->prepare(
                "INSERT INTO tb_avaliacao (
                    ava_pergunta1,
                    ava_pergunta2,
                    ava_pergunta3,
                    ava_pergunta4,
                    ava_pergunta5,
                    ava_observacao)
                VALUES (?, ?, ?, ?, ?, ?)"
            );

            $stmt->bindParam(1, $p1, PDO::PARAM_INT);
            $stmt->bindParam(2, $p2, PDO::PARAM_INT);
            $stmt->bindParam(3, $p3, PDO::PARAM_INT);
            $stmt->bindParam(4, $p4, PDO::PARAM_INT);
            $stmt->bindParam(5, $p5, PDO::PARAM_INT);
            $stmt->bindParam(6, $observacao, PDO::PARAM_STR);

            $stmt->execute();

            echo "<h1>Dados salvos</h1>";
        } catch (PDOException $e) {
            echo "Erro ao Salvar Dados: " . $e->getMessage();
        }
    }

    public function select(){
        try{
            $consulta = $this->conect->query("SELECT * FROM sua_tabela");
            $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);

            foreach ($resultados as $linha) {
                print_r($linha);
            }
        } catch (PDOException $e) {
            echo "Erro na consulta: " . $e->getMessage();
        }
    }
}
