<?php

class Preinformations{
    public $html = "
            <div class='row gy-4 mb-5' >
            <div class='row gy-4'>
                <div class='col-lg-6'>
                    <iframe width='560' height='315' src='#video#' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe> 
                </div>
                <div class='col-lg-6'>
                    <div class='content ps-0 ps-lg-5'>
                        <h2>#nome#</h2>
                        <p class='fst-italic'>
                            #paragrafo1#
                        </p>
                        <p>
                            #paragrafo2#
                        </p>
                    </div>
                </div>
            </div>
            <div class='row gy-4'>
                
                <div class='premios'>
                        #premios#
                </div>

                <div class='d-none d-sm-block imagem2'>
                    <img src='assets/img/athletes/#imagem#' class='img-fluid rounded-4' alt=''>
                </div>
            </div>
        </div>
    ";
    public $informacoes = array(

        "Atletismo" => 
        [
            1 => [
                "nome" => "Usain Bolt",
                "video" => "https://www.youtube.com/embed/cpM1pyzzkMc?si=gTdvXskGDwmNP8Vm",
                "imagem" => "usainbolt_sbg.png",
                "paragrafo1" => "Usain Bolt, nascido na Jamaica em 1986, é uma das maiores lendas do atletismo. Ele é amplamente considerado o homem mais rápido do mundo e conquistou inúmeros títulos e recordes mundiais nas corridas de velocidade.",
                "paragrafo2" => "Bolt é conhecido por sua personalidade carismática e por sua capacidade de se destacar nas Olimpíadas e Campeonatos Mundiais. Sua velocidade incrível o tornou uma figura icônica no mundo do esporte.",
                "premios" => "
                            <h2>Prêmios</h2>
                            <ul>
                                <li>Onze medalhas olímpicas, sendo oito de ouro</li>
                                <li>Recordista mundial nos 100 metros rasos e 200 metros rasos</li>
                                <li>Ouro olímpico em três Jogos Olímpicos consecutivos</li>
                                <li>Eleito Atleta do Ano pela IAAF em seis ocasiões</li>
                            </ul>
                            <h2>Recordes</h2>
                            <ul>
                                <li>Homem mais rápido do mundo, detendo os recordes dos 100 metros e 200 metros</li>
                                <li>Único atleta a vencer o 'triple-triple' nos Jogos Olímpicos (ouro nos 100m, 200m e revezamento 4x100m em três Olimpíadas consecutivas)</li>
                                <li>Maior número de medalhas de ouro nos 100 metros em Jogos Olímpicos</li>
                                <li>Maior número de medalhas de ouro nos 200 metros em Jogos Olímpicos</li>
                            </ul>
                            "
            ],
            2 => [
                    "nome" => "Carl Lewis",
                    "video" => "https://www.youtube.com/embed/h04lOmMyAMo?si=q-2_kDND4PTgNtA4",
                    "imagem" => "carllewis_sbg.png",
                    "paragrafo1" => "Carl Lewis, nascido nos Estados Unidos em 1961, é uma das maiores lendas do atletismo. Ele é amplamente considerado um dos maiores saltadores em distância e corredores de velocidade de todos os tempos.",
                    "paragrafo2" => "Lewis conquistou inúmeros títulos e recordes mundiais em sua carreira e é conhecido por sua versatilidade no atletismo, competindo em diversas disciplinas. Sua contribuição para o esporte é inegável.",
                    "premios" => "
                                    <h2>Prêmios</h2>
                                    <ul>
                                        <li>Nove medalhas olímpicas, incluindo quatro de ouro</li>
                                        <li>Recordista mundial nos 100 metros rasos</li>
                                        <li>Ouro olímpico no salto em distância em quatro Olimpíadas consecutivas</li>
                                        <li>Eleito Atleta do Ano pela IAAF em 1982, 1983 e 1984</li>
                                    </ul>
                                    <h2>Recordes</h2>
                                    <ul>
                                        <li>Maior número de medalhas de ouro no salto em distância em Jogos Olímpicos</li>
                                        <li>Primeiro homem a quebrar a barreira dos 9 segundos nos 100 metros rasos em uma Olimpíada</li>
                                        <li>Recordista mundial no revezamento 4x100 metros</li>
                                        <li>Maior número de vitórias consecutivas em grandes competições no salto em distância</li>
                                    </ul>
                                    "
                ],
        ],
        "Basquete" => 
        [
            1 => [
                "nome" => "Michael Jordan",
                "video" => "https://www.youtube.com/embed/cuLprHh_BRg?si=2PwFep5DOe4rXQbN",
                "imagem" => "michaeljordan_sbg.png",
                "paragrafo1" => "Michael Jordan, nascido nos Estados Unidos em 1963, é uma das maiores lendas do basquete. Ele conquistou seis campeonatos da NBA com o Chicago Bulls e é amplamente considerado o melhor jogador de basquete de todos os tempos.",
                "paragrafo2" => "Jordan cativou o mundo com seu talento e competitividade feroz. Sua influência transcendeu o esporte, tornando-o um ícone global. Sua aposentadoria deixou uma marca indelével na história do basquete.",
                "premios" => "
                    <h2>Prêmios</h2>
                    <ul>
                        <li>Seis vezes campeão da NBA</li>
                        <li>Cinco vezes MVP da NBA</li>
                        <li>Dez vezes All-NBA First Team</li>
                        <li>Dez vezes All-Star da NBA</li>
                        <li>Três vezes MVP das Finais da NBA</li>
                    </ul>
                    <h2>Recordes</h2>
                    <ul>
                        <li>Média de 30,1 pontos por jogo na carreira na NBA</li>
                        <li>Jogador com mais títulos de MVP das Finais da NBA (6)</li>
                        <li>Maior média de pontos por jogo em uma única temporada (37,1 pontos)</li>
                        <li>Recorde de 10 títulos de pontuação da NBA</li>
                        <li>Recorde de 7 vezes MVP das Finais da NBA consecutivos</li>
                    </ul>
                "
            ],

            2 => [
                "nome" => "Kobe Bryant",
                "video" => "https://www.youtube.com/embed/tjRCk0JVzfc?si=P2TJhfER4ELn5HZL",
                "imagem" => "kobebryant_sbg.png",
                "paragrafo1" => "Kobe Bryant, nascido nos Estados Unidos em 1978, é uma das maiores lendas do basquete. Ele conquistou cinco campeonatos da NBA com o Los Angeles Lakers e é amplamente considerado um dos maiores jogadores de basquete de todos os tempos.",
                "paragrafo2" => "Bryant cativou o mundo com seu talento e ética de trabalho implacável. Sua influência transcendeu o esporte, tornando-o uma figura icônica global. Sua tragédia pessoal deixou uma marca indelével na história do basquete.",
                "premios" => "
                    <h2>Prêmios</h2>
                    <ul>
                        <li>Cinco vezes campeão da NBA</li>
                        <li>Uma vez MVP da NBA</li>
                        <li>Dez vezes All-NBA First Team</li>
                        <li>Dez vezes All-Star da NBA</li>
                        <li>Duas vezes MVP das Finais da NBA</li>
                    </ul>
                    <h2>Recordes</h2>
                    <ul>
                        <li>Média de 25 pontos por jogo na carreira na NBA</li>
                        <li>Quarto maior pontuador de todos os tempos na NBA</li>
                        <li>Maior número de pontos marcados em um único jogo (81 pontos)</li>
                        <li>Recorde de 18 vezes selecionado para o All-Star Game</li>
                    </ul>
                "
            ],
            3 => [
                "nome" => "LeBron James",
                "video" => "https://www.youtube.com/embed/f7MC64X27Es?si=3gwXqY6d3dRVJFoC",
                "imagem" => "lebronjames_sbg.png",
                "paragrafo1" => "LeBron James, nascido nos Estados Unidos em 1984, é uma das maiores lendas do basquete. Ele conquistou quatro campeonatos da NBA com o Miami Heat, Cleveland Cavaliers e Los Angeles Lakers, e é amplamente considerado um dos maiores jogadores de basquete de todos os tempos.",
                "paragrafo2" => "James cativou o mundo com sua versatilidade e habilidades únicas. Sua capacidade de liderar equipes e influenciar a cultura do basquete é inigualável.",
                "premios" => "
                    <h2>Prêmios</h2>
                    <ul>
                        <li>Quatro vezes campeão da NBA</li>
                        <li>Quatro vezes MVP da NBA</li>
                        <li>Dezesseis vezes All-NBA First Team</li>
                        <li>Dezesseis vezes All-Star da NBA</li>
                        <li>Quatro vezes MVP das Finais da NBA</li>
                    </ul>
                    <h2>Recordes</h2>
                    <ul>
                        <li>Média de 27 pontos por jogo na carreira na NBA</li>
                        <li>Maior número de pontos marcados em playoffs da NBA</li>
                        <li>Maior número de triplos-duplos em finais da NBA</li>
                        <li>Único jogador a atingir mais de 35,000 pontos, 9,000 rebotes e 9,000 assistências na carreira</li>
                    </ul>
                "
            ],
        ],
        "Fórmula 1" => 
        [
            1 => [
                "nome" => "Lewis Hamilton",
                "video" => "https://www.youtube.com/embed/GSRklRQyOuU?si=1CjHd4KYfuZjPEpi",
                "imagem" => "lewishamilton_sbg.webp",
                "paragrafo1" => "Lewis Hamilton, nascido no Reino Unido em 1985, é uma das maiores lendas da Fórmula 1. Ele conquistou inúmeros campeonatos mundiais e é amplamente considerado um dos melhores pilotos de todos os tempos.",
                "paragrafo2" => "Hamilton é conhecido por sua velocidade, habilidade e consistência nas corridas. Sua carreira na Fórmula 1 é marcada por recordes e conquistas impressionantes.",
                "premios" => "
                    <h2>Prêmios</h2>
                    <ul>
                        <li>Sete vezes campeão mundial de Fórmula 1</li>
                        <li>Recordista de vitórias em corridas de Fórmula 1</li>
                        <li>Amplamente considerado um dos melhores pilotos da história da Fórmula 1</li>
                    </ul>
                    <h2>Recordes</h2>
                    <ul>
                        <li>Maior número de títulos mundiais na Fórmula 1 (7 títulos).</li>
                        <li>Maior número de vitórias em corridas na Fórmula 1 (mais de 100 vitórias).</li>
                        <li>Maior número de pole positions na Fórmula 1 (mais de 100 pole positions).</li>
                        <li>Maior número de pódios na Fórmula 1.</li>
                        <li>Maior número de voltas mais rápidas em corridas na Fórmula 1.</li>
                    </ul>
                "
            ],
            2 => [
                "nome" => "Michael Schumacher",
                "video" => "https://www.youtube.com/embed/I5ahkfc1kKg?si=qWJo9hL_M3sXJOdI",
                "imagem" => "michaelschumacher_sbg.png",
                "paragrafo1" => "Michael Schumacher, nascido na Alemanha em 1969, é uma das maiores lendas da Fórmula 1. Ele conquistou vários campeonatos mundiais e é amplamente considerado um dos maiores pilotos de todos os tempos.",
                "paragrafo2" => "Schumacher é conhecido por sua habilidade, competitividade e determinação nas pistas. Sua carreira na Fórmula 1 é marcada por sucesso e conquistas notáveis.",
                "premios" => "
                    <h2>Prêmios</h2>
                    <ul>
                        <li>Sete vezes campeão mundial de Fórmula 1</li>
                        <li>Recordista de vitórias em corridas de Fórmula 1 até a chegada de Lewis Hamilton</li>
                        <li>Amplamente considerado um dos melhores pilotos da história da Fórmula 1</li>
                    </ul>
                    <h2>Recordes</h2>
                    <ul>
                        <li>Maior número de títulos mundiais na Fórmula 1 (7 títulos, igualado por Lewis Hamilton).</li>
                        <li>Maior número de vitórias em uma única temporada da Fórmula 1 (13 vitórias em 2004).</li>
                        <li>Maior número de pole positions consecutivas (7 pole positions em 2011).</li>
                        <li>Maior número de vitórias em corridas consecutivas (7 vitórias em 2004).</li>
                        <li>Maior número de vitórias no Grande Prêmio de San Marino (7 vitórias).</li>
                    </ul>
                "
            ],
            3 => [
                "nome" => "Ayrton Senna",
                "video" => "https://www.youtube.com/embed/ltn3m2Au6kc?si=ZyVHHx7ryJOVYXVM",
                "imagem" => "ayrtonsenna_sbg.png",
                "paragrafo1" => "Ayrton Senna, nascido no Brasil em 1960, é uma das maiores lendas da Fórmula 1. Ele conquistou vários campeonatos mundiais e é amplamente considerado um dos melhores pilotos de todos os tempos.",
                "paragrafo2" => "Senna é conhecido por sua paixão, talento e carisma nas pistas. Sua carreira na Fórmula 1 é marcada por vitórias memoráveis e uma legião de fãs devotos.",
                "premios" => "
                    <h2>Prêmios</h2>
                    <ul>
                        <li>Três vezes campeão mundial de Fórmula 1</li>
                        <li>Amplamente considerado um dos melhores pilotos da história da Fórmula 1</li>
                        <li>Ícone do automobilismo brasileiro e mundial</li>
                    </ul>
                    <h2>Recordes</h2>
                    <ul>
                        <li>Tricampeão mundial de Fórmula 1 (1988, 1990, 1991).</li>
                        <li>Maior número de vitórias no Grande Prêmio de Mônaco (seis vitórias).</li>
                        <li>Maior número de pole positions consecutivas (oito pole positions em 1988).</li>
                        <li>Maior número de pole positions no geral (65 pole positions).</li>
                        <li>Conquista de 41 vitórias em corridas de Fórmula 1.</li>
                        <li>Reconhecido por suas habilidades excepcionais em condições de chuva.</li>
                    </ul>
                "
            ],
        ],
        "Futebol Americano" => [
            1 => [
                "nome" => "Tom Brady",
                "video" => "https://www.youtube.com/embed/8GysoME5NWQ?si=lwKA8w9A309l7Sxc",
                "imagem" => "tombrady_sbg.png",
                "paragrafo1" => "Tom Brady, nascido nos Estados Unidos em 1977, é um dos maiores jogadores de futebol americano de todos os tempos. Ele é amplamente considerado um dos melhores quarterbacks da história da NFL.",
                "paragrafo2" => "Brady conquistou inúmeros títulos da Super Bowl e estabeleceu diversos recordes na liga. Sua carreira no New England Patriots e depois no Tampa Bay Buccaneers é lendária.",
                "premios" => 
                        "<h2>Prêmios</h2>
                        <ul>
                            <li>Sete vezes campeão da Super Bowl</li>
                            <li>Cinco vezes MVP da Super Bowl</li>
                            <li>Dezessete vezes selecionado para o Pro Bowl</li>
                            <li>Três vezes Jogador Mais Valioso da NFL</li>
                        </ul>
                        <h2>Recordes</h2>
                        <ul>
                            <li>Maior número de passes para touchdown na carreira na NFL</li>
                            <li>Maior número de passes para touchdown em uma única temporada na NFL</li>
                            <li>Maior número de jardas passadas na carreira na NFL</li>
                            <li>Maior número de vitórias em jogos de pós-temporada na NFL</li>
                            <li>Maior número de títulos de MVP da Super Bowl</li>
                        </ul>"
            ],
        ],
        
            "Futebol" => [
                1 => [
                    "nome" => "Pelé",
                    "video" => "https://www.youtube.com/embed/5wDb9Q5Bl-8?si=ijIUWIZ3Fwd102PR",
                    "imagem" => "pele_sbg.png",
                    "paragrafo1" => "Pelé, nascido no Brasil em 1940, é amplamente considerado um dos maiores jogadores de futebol de todos os tempos. Ele é uma lenda do esporte e um ícone global.",
                    "paragrafo2" => "Pelé conquistou inúmeras conquistas em sua carreira, incluindo três Copas do Mundo com a seleção brasileira. Ele é conhecido por seu talento, dribles e habilidades excepcionais com a bola nos pés.",
                    "premios" => 
                        "<h2>Prêmios</h2>
                        <ul>
                            <li>Três vezes campeão da Copa do Mundo</li>
                            <li>Maior artilheiro da história do futebol com mais de 1.000 gols marcados</li>
                            <li>Eleito Jogador do Século pela FIFA em 1999</li>
                            <li>Amplamente reconhecido como o Rei do Futebol</li>
                        </ul>
                        <h2>Recordes</h2>
                        <ul>
                            <li>Maior número de gols em uma única temporada de futebol</li>
                            <li>Maior número de títulos e prêmios individuais no futebol</li>
                            <li>Contribuiu para a popularização global do futebol como um esporte universal</li>
                    </ul>"
                ],
                2 => [
                    "nome" => "Lionel Messi",
                    "video" => "https://www.youtube.com/embed/PSanJ5swYBM?si=da1Roh9qnGEXZgxs",
                    "imagem" => "messi_sbg.png",
                    "paragrafo1" => "Lionel Messi, nascido na Argentina em 1987, é considerado um dos maiores jogadores de futebol da história. Ele é conhecido por sua genialidade, dribles incríveis e habilidades excepcionais com a bola.",
                    "paragrafo2" => "Messi passou a maior parte de sua carreira no Barcelona, onde conquistou inúmeros títulos, antes de se juntar ao Paris Saint-Germain (PSG). Ele é um dos artilheiros mais prolíficos e conquistou inúmeros prêmios individuais.",
                    "premios" => 
                    "<h2>Prêmios</h2>
                    <ul>
                        <li>Seis vezes vencedor da Bola de Ouro da FIFA</li>
                        <li>Múltiplas vezes artilheiro da La Liga espanhola</li>
                        <li>Amplamente reconhecido como um dos melhores jogadores do mundo</li>
                    </ul>
                    <h2>Recordes</h2>
                    <ul>
                        <li>Maior número de gols em uma única temporada na Europa</li>
                        <li>Maior número de gols na história do Barcelona</li>
                        <li>Maior número de títulos da La Liga com o Barcelona</li>
                        <li>Contribuiu significativamente para o sucesso da seleção argentina, vencendo a Copa América em 2021</li>
                    </ul>"
                ],
                3 => [
                    "nome" => "Cristiano Ronaldo",
                    "video" => "https://www.youtube.com/embed/qc18PDu90KE?si=7QY5JrNWS98TF0to",
                    "imagem" => "cr7_sbg.png",
                    "paragrafo1" => "Cristiano Ronaldo, nascido em Portugal em 1985, é um dos maiores jogadores de futebol da história. Ele é conhecido por sua incrível habilidade, velocidade e habilidades excepcionais com a bola.",
                    "paragrafo2" => "Ronaldo tem uma carreira brilhante que inclui passagens por clubes como o Manchester United, Real Madrid e Juventus, onde conquistou inúmeros títulos e prêmios. Ele é um dos artilheiros mais prolíficos da história do futebol.",
                    "premios" => 
                        "<h2>Prêmios</h2>
                        <ul>
                            <li>Cinco vezes vencedor da Bola de Ouro da FIFA</li>
                            <li>Campeão da Liga dos Campeões da UEFA com diferentes clubes</li>
                            <li>Múltiplas vezes artilheiro da liga em diversos campeonatos</li>
                        </ul>
                        <h2>Recordes</h2>
                        <ul>
                            <li>Maior número de gols na história da Liga dos Campeões da UEFA</li>
                            <li>Artilheiro da seleção portuguesa de futebol</li>
                            <li>Contribuiu significativamente para o sucesso da seleção portuguesa, incluindo a vitória na Euro 2016 e na Liga das Nações da UEFA 2019</li>
                        </ul>"
                ],
            
            4 => [
                    "nome" => "Marta Vieira da Silva",
                    "video" => "https://www.youtube.com/embed/npr3H96U-A0?si=Kc47UG1MuIy0oVDJ",
                    "imagem" => "marta_sbg.png",
                    "paragrafo1" => "Marta Vieira da Silva, nascida no Brasil em 1986, é uma das maiores jogadoras de futebol feminino de todos os tempos. Ela é conhecida por sua habilidade, visão de jogo e impressionante capacidade de marcar gols.",
                    "paragrafo2" => "Marta conquistou inúmeros títulos, incluindo medalhas olímpicas e títulos da Copa do Mundo. Ela é uma inspiração para jogadoras de futebol em todo o mundo e uma defensora do crescimento do futebol feminino.",
                    "premios" => 
                    "<h2>Prêmios</h2>
                    <ul>
                        <li>Seis vezes vencedora da Bola de Ouro da FIFA</li>
                        <li>Medalhista olímpica com a seleção brasileira de futebol feminino</li>
                        <li>Artilheira da Copa do Mundo Feminina em diversas edições</li>
                    </ul>
                    <h2>Recordes</h2>
                    <ul>
                        <li>Maior artilheira da história da Copa do Mundo Feminina</li>
                        <li>Considerada uma das maiores jogadoras de futebol feminino de todos os tempos</li>
                        <li>Atua como embaixadora do esporte e defensora da igualdade de gênero no futebol</li>
                    </ul>" 
            ],
        
        ],
        "Ginástica" => [
                1 => [
                    "nome" => "Simone Biles",
                    "video" => "https://www.youtube.com/embed/OPmLhcQSXjk?si=cOW2nB1PQ3ofUVTi",
                    "imagem" => "simonebiles_sbg.png",
                    "paragrafo1" => "Simone Biles, nascida nos Estados Unidos em 1997, é uma das ginastas artísticas mais condecoradas da história. Ela é conhecida por sua destreza e habilidade inigualável na ginástica.",
                    "paragrafo2" => "Biles conquistou múltiplas medalhas de ouro nas Olimpíadas e nos campeonatos mundiais, consolidando seu status como uma das maiores atletas de todos os tempos.",
                    "premios" => 
                    "<h2>Prêmios</h2>
                    <ul>
                        <li>Quatro vezes campeã olímpica</li>
                        <li>Dezenove vezes campeã mundial de ginástica</li>
                        <li>Medalha de ouro no concurso completo por equipes nos Jogos Olímpicos</li>
                        <li>Medalha de ouro no salto, solo, barras assimétricas e trave nas Olimpíadas</li>
                    </ul>
                    <h2>Recordes</h2>
                    <ul>
                        <li>Primeira ginasta a realizar um duplo mortal com saída triplo carpado no solo</li>
                        <li>Detentora do maior número de medalhas de ouro em campeonatos mundiais</li>
                        <li>Maior número de títulos no All-Around da Copa do Mundo de Ginástica</li>
                        <li>Sete títulos consecutivos no All-Around do Campeonato Nacional dos EUA</li>
                    </ul>"
                ],
            ],
        
        
            "Natação" => [
                1 => [
                    "nome" => "Michael Phelps",
                    "video" => "https://www.youtube.com/embed/wJkK69Ds_cg?si=L4RIMle06NNNyy8I",
                    "imagem" => "michaelphelps_sbg.png",
                    "paragrafo1" => "Michael Phelps, nascido nos Estados Unidos em 1985, é um dos nadadores mais condecorados da história olímpica. Ele é conhecido por sua incrível velocidade e técnica na piscina.",
                    "paragrafo2" => "Phelps conquistou um grande número de medalhas de ouro e recordes olímpicos, consolidando seu status como uma das maiores estrelas do esporte.",
                    "premios" => 
                    "<h2>Prêmios</h2>
                    <ul>
                        <li>Vinte e três medalhas de ouro olímpicas</li>
                        <li>Trinta e cinco medalhas olímpicas no total</li>
                        <li>Recordista de medalhas de ouro em uma única edição dos Jogos Olímpicos</li>
                        <li>Dezoito vezes campeão mundial de natação</li>
                    </ul>
                    <h2>Recordes</h2>
                    <ul>
                        <li>Recordista mundial em várias provas de natação</li>
                        <li>Maior número de medalhas de ouro olímpicas na história</li>
                        <li>Maior número de medalhas olímpicas no geral</li>
                        <li>Maior número de vitórias em provas individuais olímpicas</li>
                    </ul>"
                ],
            ],
            
                "Tênis" => [
                    1 => [
                        "nome" => "Roger Federer",
                        "video" => "https://www.youtube.com/embed/mExHw1oTP8Y?si=dHwcEa8Jbs7QKNJ6",
                        "imagem" => "rogerfeder_sbg.png",
                        "paragrafo1" => "Roger Federer, nascido na Suíça em 1981, é um dos maiores tenistas da história. Ele é conhecido por sua elegância e habilidade nas quadras de tênis.",
                        "paragrafo2" => "Federer conquistou inúmeros títulos de Grand Slam e manteve seu domínio no esporte por muitos anos, sendo considerado um dos maiores jogadores de todos os tempos.",
                        "premios" => 
                        "<h2>Prêmios</h2>
                        <ul>
                            <li>Vinte títulos de Grand Slam</li>
                            <li>Recordista de semanas como número 1 do mundo no ranking da ATP</li>
                            <li>Dezesseis títulos de Masters 1000</li>
                            <li>Ouro olímpico em duplas nas Olimpíadas</li>
                        </ul>
                        <h2>Recordes</h2>
                        <ul>
                            <li>Maior número de semanas como número 1 do mundo no ranking da ATP</li>
                            <li>Maior número de títulos de Wimbledon na era Open</li>
                            <li>Maior número de vitórias em Grand Slam</li>
                            <li>Maior número de finais de Grand Slam alcançadas</li>
                        </ul>"
                    ],
                ],
                
                "Vôlei" => [
                    1 => [
                        "nome" => "Serginho",
                        "video" => "https://www.youtube.com/embed/mbc_ergFGzQ?si=4ulI3T9keQ_QnarB",
                        "imagem" => "serginho_sbg.png",
                        "paragrafo1" => "Sérgio Dutra Santos, conhecido como Serginho, é um dos maiores jogadores de vôlei do Brasil. Ele é reconhecido por sua agilidade e habilidades defensivas excepcionais nas quadras.",
                        "paragrafo2" => "Serginho conquistou inúmeras medalhas de ouro em competições internacionais e é amplamente respeitado por sua contribuição para o voleibol brasileiro.",
                        "premios" => 
                        "<h2>Prêmios</h2>
                        <ul>
                            <li>Quatro medalhas de ouro olímpicas</li>
                            <li>Quatro vezes eleito o Melhor Líbero do Mundo</li>
                            <li>Dezessete títulos da Liga Mundial de Vôlei</li>
                            <li>Três vezes campeão da Copa do Mundo de Vôlei</li>
                        </ul>
                        <h2>Recordes</h2>
                        <ul>
                            <li>Maior número de medalhas de ouro olímpicas no vôlei brasileiro</li>
                            <li>Recordista em número de defesas e recepções no voleibol internacional</li>
                            <li>Maior número de participações na seleção brasileira</li>
                            <li>Destacada carreira de mais de 20 anos como líbero na seleção brasileira</li>
                        </ul>"
                    ],
                    2 => [
                            "nome" => "Sheilla Castro",
                            "video" => "https://www.youtube.com/embed/k-nmLixTqBs?si=POGFdzQo0ebhw7-7",
                            "imagem" => "sheillacastro_sbg.png",
                            "paragrafo1" => "Sheilla Castro, nascida no Brasil em 1983, é uma das maiores jogadoras de voleibol de todos os tempos. Ela é amplamente considerada uma das mais talentosas e condecoradas atletas do voleibol.",
                            "paragrafo2" => "Sheilla é conhecida por sua versatilidade, poder de ataque e habilidades excepcionais na quadra. Ela conquistou inúmeros títulos olímpicos e mundiais, inspirando jogadoras e amantes do voleibol em todo o mundo.",
                            "premios" => 
                            "<h2>Prêmios</h2>
                            <ul>
                                <li>Medalhista de ouro olímpica em várias edições dos Jogos Olímpicos</li>
                                <li>Campeã mundial de voleibol em múltiplas ocasiões</li>
                                <li>Eleita MVP em diversas competições importantes</li>
                                <li>Reconhecida como uma das maiores pontuadoras do voleibol mundial</li>
                            </ul>
                            <h2>Recordes</h2>
                            <ul>
                                <li>Contribuiu significativamente para o sucesso da seleção brasileira de voleibol</li>
                                <li>É lembrada por seu papel fundamental em vitórias importantes na história do voleibol brasileiro</li>
                                <li>Manteve uma carreira notável ao longo dos anos como uma das melhores jogadoras de voleibol do Brasil</li>
                            </ul>"
                        ],
                    ],
                
            
  );
}

