<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../global_head.php"?>
    
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/menu-bar.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <title>Temperatura (LM35) / Luminosidade (LDR)</title>
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
        <h1>Temperatura (LM35) / Luminosidade (LDR)</h1>
        <div class="text-project">
            <h3>Objetivo:</h3>
            <p>Criar um medidor de temperatura e luminosidade. Este projeto irá fazer com que o sensor LM35 e LDR sinalizem a temperatura e luminosidade do ambiente.</p>
            <h3>Componentes necessários:</h3>
            <p>Protoboard;</p>
            <p>Sensor LM35;</p>
            <p>Sensor LDR;</p>
            <p>Oito fios jumper;</p>
            <p>Um resistor de 100 ohms; *</p>
            <p>Um cabo USB;</p>
            <p>Um computador com a IDE do Arduino instalada;</p>
            <p>Arduino MEGA 2560.</p>
            <p>* Um resistor é um componente que é utilizado para controle da quantidade de energia que sera transmitida a algum outro componente.</p>
            <p>Nesse sistema é adicionado um sensor de luminosidade, o sensor LDR, que significa Light Dependent Resistor (ou seja, resistor dependente de luz). Ele resumidamente consiste em uma diferença de potencial que está proporcionalmente ligado a quantidade de luz recebida pelo sensor.</p>
            <p>E também iremos medir a temperatura ambiente de certo local, para fazer isso usaremos o sensor LM35. Devemos ter cuidado ao conectar ele no arduino, ele deve estar com sua parte plana virada para a pessoa.</p>
            <h3>Montagem do Circuito:</h3>
            <p>Conecte os componentes no Protoboard como mostra a figura abaixo. Verifique cuidadosamente os cabos de ligação antes de ligar seu Arduino. Lembre-se que o Arduino deve estar totalmente desconectado da força enquanto você monta o circuito.</p>
            <center>
                <img src="../../assets/img/projects/print_luminosidade_temperatura.png" alt="">
                <p>(Fio azul A0, marrom A1, Preto GND e vermelho 5V)</p>
                <h3>Para ver a temperatura e a luminosidade que o sensor está detectando:</h3>
                <p><strong>Passo 1:</strong> Vá em Ferramentas (Tools) e Monitor Serial (Serial Monitor) ou clique Ctrl+Shift+M.</p>
                <img src="../../assets/img/projects/passo1_temperatura_luminosidade.png" alt="">
                <p><strong>Passo 2:</strong> Os dados coletados do sensor aparecerão nessa janela. </p>
                <img src="../../assets/img/projects/passo2_temperatura_luminosidade.png" alt="">
                <p>Obs: O nome da janela pode mudar dependendo da entrada do seu arduino.</p>
                <h3>Sistema finalizado:</h3>
                <img src="../../assets/img/projects/sistema_temperatura_luminosidade.png" alt="">
            </center>
        </div>
    </section>
    <?php include '../rodape.php' ?>
</body>
</html>