<?php

class Conection {
    private $conect;

    public function __construct() {
           $this->conect = new SQLite3("database/database.sqlite");
            $existe = $this->conect->query("SELECT COUNT(*) FROM sqlite_master WHERE type='table' AND name='tb_avaliacao';");

            $ifexiste = 0;

            while($row = $existe->fetchArray(SQLITE3_ASSOC)){
                $ifexiste = $row["COUNT(*)"];
            }

             if($row != 0){
                $this->conect->query(
                    "CREATE TABLE tb_avaliacao (
                        ava_id INTEGER PRIMARY KEY AUTOINCREMENT,
                        ava_pergunta1 INTEGER NOT NULL,
                        ava_pergunta2 INTEGER NOT NULL,
                        ava_pergunta3 INTEGER NOT NULL,
                        ava_pergunta4 INTEGER NOT NULL,
                        ava_pergunta5 INTEGER NOT NULL,
                        ava_observacao TEXT
                    )"
                );
             }
    }

    public function save($respostas) {
        $p1 = $respostas['p1'];
        $p2 = $respostas['p2'];
        $p3 = $respostas['p3'];
        $p4 = $respostas['p4'];
        $p5 = $respostas['p5'];
        $observacao = $respostas['observacao'];

        try {
            $this->conect->query(
                "INSERT INTO tb_avaliacao (
                    ava_pergunta1,
                    ava_pergunta2,
                    ava_pergunta3,
                    ava_pergunta4,
                    ava_pergunta5,
                    ava_observacao)
                VALUES ($p1, $p2, $p3, $p4, $p5, '$observacao')"
            );
            header('Location: avaliacao.php');
            return;
        } catch (Exception $e) {
            echo "Erro ao Salvar Dados: " . $e;
        }
    }
    public function login($usuario, $senha){
        $user = "admin22";
        $password = "thegoats2023";

        if($usuario == $user and $senha == $password){
            header('Location: resultado.php');
            return;
        }
        else{
            return;
        }
    }

    public function select(){
        $valores = array(
            "TotalParticipantes" => 0,
            "p1" => [
                "q1" => 0,
                "q2" => 0,
                "q3" => 0,
                "q4" => 0,
                "q5" => 0
            ],
            "p2" => [
                "q1" => 0,
                "q2" => 0,
                "q3" => 0,
                "q4" => 0,
                "q5" => 0
            ],
            "p3" => [
                "q1" => 0,
                "q2" => 0,
                "q3" => 0,
                "q4" => 0,
                "q5" => 0
            ],
            "p4" => [
                "q1" => 0,
                "q2" => 0,
                "q3" => 0,
                "q4" => 0,
                "q5" => 0
            ],
            "p5" => [
                "q1" => 0,
                "q2" => 0,
                "q3" => 0,
                "q4" => 0,
                "q5" => 0,
                "q6" => 0,
                "q7" => 0,
                "q8" => 0,
                "q9" => 0,
                "q10" => 0
            ]
        );
        try{
            $consulta = $this->conect->query(
                "SELECT ava_pergunta1, ava_pergunta2, ava_pergunta3, ava_pergunta4, ava_pergunta5
                FROM tb_avaliacao");
           

            while ($row = $consulta->fetchArray(SQLITE3_ASSOC)) {
                $valores["TotalParticipantes"]++;
                $valores["p1"]["q" . $row['ava_pergunta1']]++;
                $valores["p2"]["q" . $row['ava_pergunta2']]++;
                $valores["p3"]["q" . $row['ava_pergunta3']]++;
                $valores["p4"]["q" . $row['ava_pergunta4']]++;
                $valores["p5"]["q" . $row['ava_pergunta5']]++;
            }

            foreach ($valores as $pergunta => &$respostas) {
                foreach ($respostas as $opcao => &$quantidade) {
                    $quantidade = number_format(($quantidade / $valores["TotalParticipantes"]) * 100, 2);
                    $valores[$pergunta][$opcao] = $quantidade;
                }
                
                
            }
        } catch (Exception $e) {
            echo "Erro na consulta: " . $e;
        }

        return $valores;

    }
}
