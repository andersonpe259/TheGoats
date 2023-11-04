<?php

class GeneratorHtml{

    private function substituteValues($entrada, $busca, $substitui) {
    $text = str_replace($busca, $substitui, $entrada);
    return $text;
    }

    public function gerarHtml($html, $modalidade){
        $n = count($modalidade);
        $returnHtml = "";
        $keywords = [
            "#nome#",
            "#video#",
            "#imagem#",
            "#paragrafo1#",
            "#paragrafo2#",
            "#premios#"
        ];

        for ($i = 0; $i < $n; $i++) {
            $atleta = $modalidade[$i + 1];
            $htmlAtleta = $html; 
    
            $htmlAtleta = $this->substituteValues($htmlAtleta, "#nome#", $atleta["nome"]);
            $htmlAtleta = $this->substituteValues($htmlAtleta, "#video#", $atleta["video"]);
            $htmlAtleta = $this->substituteValues($htmlAtleta, "#imagem#", $atleta["imagem"]);
            $htmlAtleta = $this->substituteValues($htmlAtleta, "#paragrafo1#", $atleta["paragrafo1"]);
            $htmlAtleta = $this->substituteValues($htmlAtleta, "#paragrafo2#", $atleta["paragrafo2"]);
            $htmlAtleta = $this->substituteValues($htmlAtleta, "#premios#", $atleta["premios"]);
    
            $returnHtml .= $htmlAtleta;
        }
        return $returnHtml;   
    }

}


