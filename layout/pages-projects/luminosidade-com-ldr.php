<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../global_head.php"?>
    
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/menu-bar.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <title>Luminosidade com LDR</title>
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
        <h1>Luminosidade com LDR</h1>
        <div class="text-project">
            <h3>Objetivo:</h3>
            <p>Criar um sistema de luminosidade. Este projeto irá fazer com que o sensor LDR sinalize a quantidade de luz recebida no ambiente.</p>
            <h3>Componentes necessários:</h3>
            <p>Sensor LDR;</p>
            <p>Protoboard;</p>
            <p>Três fios jumper;</p>
            <p>Um resistor de 2200 ohms; *</p>
            <p>Um cabo USB;</p>
            <p>Um computador com a IDE do arduino instalado;</p>
            <p>Arduino MEGA 2560.</p>
            <p>* Um resistor é um componente que é utilizado para controle da quantidade de energia que sera transmitida a algum outro componente.</p>
            <p>Nesse sistema é adicionado um sensor de luminosidade, o sensor LDR, que significa Light Dependent Resistor (ou seja, resistor dependente de luz). Ele resumidamente consiste em uma diferença de potencial que está proporcionalmente ligado a quantidade de luz recebida pelo sensor.</p>
            <h3>Montagem do Circuito:</h3>
            <p>Conecte os componentes no Protoboard como mostra a figura abaixo. Verifique cuidadosamente os cabos de ligação antes de ligar seu Arduino. Lembre-se que o Arduino deve estar totalmente desconectado da força enquanto você monta o circuito.</p>
            <center>
                <img src="../../assets/img/projects/print_luminosidade_com_ldr.png" alt="">
                <p>(Fio vermelho no 5V, preto no GND e azul no A1)</p>
            </center>
            <h3>Para ver os dados que o sensor está detectando:</h3>
            <p><strong>Passo 1:</strong> Vá em Ferramentas (Tools) e Monitor Serial (Serial Monitor) ou clique Ctrl+Shift+M.</p>
            <p><strong>Passo 2:</strong> Os dados coletados do sensor aparecerão nessa janela. </p>
            <p>Obs: O nome da janela pode mudar dependendo da entrada do seu arduino.</p>
            <center>
                <h3>Sistema finalizado:</h3>
                <img src="../../assets/img/projects/sistema_luminosidade_com_ldr.png" alt="">
                <h4>Veja o vídeo abaixo com a montagem passo a passo:</h4>
                <iframe width="560" height="349" type="text/html" src="https://www.youtube.com/embed/ch8PNBajWGY" frameborder="0" allowfullscreen></iframe>
            </center>
        </div>
    </section>
    <?php include '../rodape.php' ?>
</body>
</html>