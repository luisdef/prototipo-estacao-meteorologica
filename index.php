<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'layout/global_head.php' ?>
    
    <link rel="stylesheet" href="./assets/css/estacao-painel.css">
    <link rel="stylesheet" href="./assets/css/tabela-valores.css">

    <title>Estação Meteorológica IFRS</title>
</head>
<body>
    <?php include 'layout/cabecalho.php' ?>    

    <section>
        <h1>Dados sobre o tempo atual</h1>

        <?php include 'config/painel_tempo.php' ?>

        <a class="weatherwidget-io" href="https://forecast7.com/pt/n29d45n51d31/feliz/" data-icons="Climacons" data-mode="Forecast" data-theme="pure" >Previsão Feliz</a>

        <script>
            !function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src= 'https://weatherwidget.io/js/widget.min.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            } (document, 'script', 'weatherwidget-io-js');
        </script>

    </section>
    <section>
        <h1>Sobre</h1>
        
        <p>Este projeto tem como objetivo ensinar física de forma prática e didática, por meio softwares livres e hardware aberto, neste caso, o Arduino!</p>

        <p>Com o Arduino é desenvolvido uma “Estação Meteorológica” de baixo custo, que estuda temas ligados à áreas da ciência e tecnologia através dos fenômenos climáticos captados e observados através da Estação.</p>
    </section>

    <section>
        <h1>Histórico do Projeto</h1>
        <p>O projeto de Ensino ocorre todo ano desde 2016, começou de uma forma básica com apenas alguns sensores como: DHT11, LDR, LM35 e BMP180.</p>
        <p>Em 2017 foram incorporados no projeto um pluviômetro de báscula digital, um anemômetro, além da montagem estrutural com canos de PVC.</p>
        <p>Em 2018 foi criado o blog da Estação Meteorológica IFRS - Campus Feliz, com o objetivo de divulgar o projeto e a metodologia utilizada na construção da mesma.</p>
        <p>Em 2019 realizou-se no dia 2 de setembro, uma visita técnica ao Inmet 8° DISME.</p>
        <p>Em 2020, por causa do distanciamento social, as reuniões da estação tiveram que ser adaptadas de forma remota.</p>
        <p>Ainda em 2020, o <a target="_blank" class="link-texto" href="https://estacaometeorologicafeliz.blogspot.com/">blog da estação</a> sofreu diversas atualizações, como criação de vídeos, criação de novos tópicos, criação de novos projetos com o Arduino, etc.</p>
        <p>Com a dificuldade da pandemia, foi criada a Estação Meteorológica acessível, uma estação meteorológica que visa desenvolver conhecimentos em áreas de tecnologia e ciência, com um custo baixo e peças acessíveis, podendo ser construído em casa.</p>
        <p>Ainda em 2021, não foi possível trabalhar no projeto de forma presencial, então o projeto está sendo continuado de forma remota.</p>
    </section>

    <section>
        <h1>Tabela dos componentes usados no projeto e seu respectivos preços (aproximados):</h1>
        <center>
        <table class="componentes">
            <tbody>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                </tr>
                <tr>
                    <td>Arduino Mega 2560</td>
                    <td>R$119,58</td>
                </tr>
                <tr>
                    <td>Anemômetro</td>
                    <td>R$199,00</td>
                </tr>
                <tr>
                <td>Pluviômetro de báscula digital*</td>
                <td>R$ 265,53</td>
                </tr>
                <tr>
                <td>Módulo ethernet- Enc28j60</td>
                <td>R$ 56,76</td>
                </tr>
                <tr>
                <td>Placa bluetooth HC-05</td>
                <td>R$ 46,60</td>
                </tr>
                <tr>
                <td><b>Sensores:</b><br>
                      DHT22(Temperatura e umidade)<br>
                      LDR (Luminosidade)<br>
                      BMP180 (Pressão e temperatura)<br></td>
                <td><br>R$ 54,90<br>
                    R$ 1,50<br>
                    R$ 18,90<br></td>
                </tr>
                <tr>
                <th>Preço total</th>
                <td>R$ 762,77</td>
                </tr>
            </tbody>
        </table>
        </center>
    </section>
    
    <?php include 'layout/rodape.php' ?>
</body>
</html>