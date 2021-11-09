<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="./assets/img/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/global.css">
    <title>Estação</title>
</head>
<body>

    <nav>
        <a href="#"><img class="logo" src="./assets/img/logo.png" alt="Logo"></a>
        <div class="bar">
            <a href="#"><i class="fa fa-home"></i> Início</a>
            <a href="view/projetos.php"><i class="fa fa-microchip"></i> Projetos</a>
            <a href="view/tutoriais.php"><i class="fa fa-play-circle"></i> Tutoriais</a>
            <a href="view/equipe.php"><i class="fa fa-users"></i> Equipe</a>
            <a href="view/eventos.php"><i class="fa fa-trophy"></i> Eventos</a>
        </div>
    </nav>
    
    <section class="main">
        <h1>Dados sobre o tempo atual</h1>
        <a class="weatherwidget-io" href="https://forecast7.com/pt/n29d45n51d31/feliz/" data-label_1="Feliz, RS" data-font="Roboto" data-icons="Climacons" data-theme="pure" data-basecolor="#f8f8f8" data-accent="rgba(1, 1, 1, 0.04)" data-highcolor="#180e0e" data-lowcolor="#101418" ></a>
        <script>
            !function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = 'https://weatherwidget.io/js/widget.min.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document,'script','weatherwidget-io-js');
        </script>
    </section>

    <section>
        <h1>Sobre</h1>
        
        <p>Este projeto tem como objetivo ensinar física de forma prática e didática, por meio softwares livres e hardware aberto, neste caso, o Arduino!</p>

        <p>Com o Arduino é desenvolvido uma “Estação Meteorológica” de baixo custo, que estuda temas ligados à áreas da ciência e tecnologia através dos fenômenos climáticos captados e observados através da Estação.</p>
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

    <section>
        <h1>Um pouco sobre como tudo começou</h1>
        <p>O projeto de Ensino ocorre todo ano desde 2016, começou de uma forma básica com apenas alguns sensores como: DHT11, LDR, LM35 e BMP180.</p>
        <p>Em 2017 foram incorporados no projeto um pluviômetro de báscula digital, um anemômetro, além da montagem estrutural com canos de PVC.</p>
        <p>Em 2018 foi criado o blog da Estação Meteorológica IFRS- Campus Feliz, com o objetivo de divulgar o projeto e a metodologia utilizada na construção da mesma.</p>
    </section>
    
    <?php include './view/layout/rodape.php' ?>
</body>
</html>