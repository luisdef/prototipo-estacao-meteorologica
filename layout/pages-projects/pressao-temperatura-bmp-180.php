<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../global_head.php"?>
    
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/menu-bar.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <title>Pressão/Temperatura (BMP-180)</title>
</head>
<body>
<nav>
    <a href="index.php"><img class="logo" src="../../assets/img/new_logo.png" alt="Logo"></a>
    <div class="bar">
        <a href="index.php" class="fa fa-home"> <span>Início</span></a>
        <a href="projetos.php" class="fa fa-microchip"> <span>Projetos</span></a>
        <a href="tutoriais.php" class="fa fa-play-circle"> <span>Tutoriais</span></a>
        <a href="equipe.php" class="fa fa-users"> <span>Equipe</span></a>
        <a href="eventos.php" class="fa fa-trophy"> <span>Eventos</span></a>
    </div>
    <div class="dropdown">
        <button class="dropbtn">
            <i class="fa fa-list-ul" aria-hidden="true"> <span>Menu</span></i>
        </button>
        <div class="dropdown-content">
            <a href="index.php" class="fa fa-home"> <span>Início</span></a>
            <a href="projetos.php" class="fa fa-microchip"> <span>Projetos</span></a>
            <a href="tutoriais.php" class="fa fa-play-circle"> <span>Tutoriais</span></a>
            <a href="equipe.php" class="fa fa-users"> <span>Equipe</span></a>
            <a href="eventos.php" class="fa fa-trophy"> <span>Eventos</span></a>
        </div>
    </div>
</nav>
<section>
        <h1>Pressão/Temperatura (BMP-180)</h1>
        <div class="text-project">
            <h3>Objetivo:</h3>
            <p>Criar um sistema de pressão e temperatura. Este projeto irá fazer com que o sensor BMP180 sinalize a  pressão e temperatura do ambiente.</p>
            <h3>Componentes necessários:</h3>
            <p>Protoboard;</p>
            <p>Sensor BMP-180 Breakout (GY-68)</p>
            <p>Quatro fios jumper;</p>
            <p>Um cabo USB;</p>
            <p>Um computador com a IDE do arduino instalado;</p>
            <p>Arduino MEGA 2560.</p>
            <p>O sensor BMP180, é um sensor que coleta a pressão atmosférica do local, é um sensor compacto e muito eficiente, utilizando bem pouca energia e ocupando pouco espaço.</p>
            <h3>Montagem do Circuito:</h3>
            <p>Conecte os componentes no Protoboard como mostra a figura abaixo. Verifique cuidadosamente os cabos de ligação antes de ligar seu Arduino. Lembre-se que o Arduino deve estar totalmente desconectado da força enquanto você monta o circuito.</p>
            <center>
                <img src="../../assets/img/projects/print_pressao_e_temperatura_bmp180.png" alt="">
                <p>(Fio azul Communcation SCL21, verde Communcation SCL20, preto GND, vermelho 5V)</p>
            </center>
            <h3>Bibliotecas necessárias:</h3>
            <a href="https://github.com/adafruit/Adafruit-BMP085-Library">Adafruit-DHT-BMP085-library</a>
            <br>
            <a href="https://github.com/PaulStoffregen/Wire">Wire-library</a>
            <center>
            <h3>Para ver os dados que o sensor está detectando:</h3>
            <p><strong>Passo 1:</strong> Vá em Ferramentas (Tools) e Monitor Serial (Serial Monitor) ou clique Ctrl+Shift+M.</p>
            <img src="../../assets/img/projects/passo1_pressao_e_temperatura_com_bmp180.png" alt="">
            <p><strong>Passo 2:</strong> Os dados coletados do sensor aparecerão nessa janela. </p>
            <img src="../../assets/img/projects/passo2_pressao_e_temperatura_com_bmp180.png" alt="">
            <p>Obs: O nome da janela pode mudar dependendo da entrada do seu arduino.</p>
            <h3>Sistema finalizado:</h3>
            <img src="../../assets/img/projects/sistema_pressao_e_temperatura_com_bmp180.png" alt="">
            </center>
        </div>
    </section>
    <?php include '../rodape.php' ?>
</body>
</html>