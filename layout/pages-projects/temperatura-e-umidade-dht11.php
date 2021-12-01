<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../global_head.php"?>
    
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/menu-bar.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <title>Temperatura e Umidade DHT11</title>
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
        <h1>Temperatura / Umidade DHT11</h1>
        <div class="text-project">
            <h3>Objetivo:</h3>
            <p>Criar um sistema de umidade e temperatura. Este projeto irá fazer com que o sensor DHT11 sinalize a temperatura e umidade no ambiente.</p>
            <h3>Componentes necessários:</h3>
            <p>Sensor DHT11;</p>
            <p>Protoboard;</p>
            <p>Cinco fios jumper;</p>
            <p>Um resistor de 10 kilo ohms; *</p>
            <p>Um cabo USB;</p>
            <p>Um computador com a IDE do arduino instalado;</p>
            <p>Arduino MEGA 2560.</p>
            <p>* Um resistor é um componente que é utilizado para controle da quantidade de energia que sera transmitida a algum outro componente.</p>
            <p>Nesse sistema utilizaremos o sensor DHT11, que diferente do DHT22 tem uma precisão menor em temperatura e uma faixa de leitura menor mas ele é mais rápido na parte de captura de dados.</p>
            <h3>Montagem do Circuito:</h3>
            <p>Conecte os componentes no Protoboard como mostra a figura abaixo. Verifique cuidadosamente os cabos de ligação antes de ligar seu Arduino. Lembre-se que o Arduino deve estar totalmente desconectado da força enquanto você monta o circuito.</p>
            <center>
                <img src="../../assets/img/projects/print_umidade_e_temperatura_dht11.png" alt="">
                <p>(Fio verde analógico 1, vermelho 5V, preto GND e resistor nos pinos 1(5V) e 2(analogico 1) do DHT11 )</p>
            </center>
            <h3>Bibliotecas neceessárias:</h3>
            <a href="https://github.com/adafruit/DHT-sensor-library">Ardafuit-DHT-sensor-library</a>
            <br>
            <a href="https://github.com/adafruit/Adafruit_Sensor">Ardafuit_Sensor</a>
            <center>
            <h3>Para ver os dados que o sensor está detectando:</h3>
            <p><strong>Passo 1:</strong> Vá em Ferramentas (Tools) e Monitor Serial (Serial Monitor) ou clique Ctrl+Shift+M.</p>
            <img src="../../assets/img/projects/passo1_umidade_e_temperatura_dht11.png" alt="">
            <p><strong>Passo 2:</strong> Os dados coletados do sensor aparecerão nessa janela. </p>
            <img src="../../assets/img/projects/passo2_umidade_e_temperatura_dht11.png" alt="">
            <p>Obs: O nome da janela pode mudar dependendo da entrada do seu arduino.</p>
            <h3>Sistema finalizado:</h3>
            <img src="../../assets/img/projects/sistema_umidade_e_temperatura_dht11.png" alt="">
            </center>
        </div>
    </section>
    <?php include '../rodape.php' ?>
</body>
</html>