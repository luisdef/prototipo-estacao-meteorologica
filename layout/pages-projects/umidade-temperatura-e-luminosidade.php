<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../global_head.php"?>
    
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/menu-bar.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <title>Umidade, Temperatura (DHT11) e Luminosidade (LDR)</title>
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
        <h1>Umidade, Temperatura (DHT11) e Luminosidade (LDR)</h1>
        <div class="text-project">
            <h3>Objetivo:</h3>
            <p>Criar um projeto Arduino juntando vários sensores para saber todos os dados possíveis.</p>
            <h3>Componentes necessários:</h3>
            <p>Protoboard;</p>
            <p>Sensor LDR;</p>
            <p>Sensor DHT11;</p>
            <p>Jumpers;</p>
            <p>Resistor de 220 ohms; *</p>
            <p>Resistor de 10K ohms; *</p>
            <p>Um cabo USB;</p>
            <p>Um computador com a IDE do Arduino instalada;</p>
            <p>Arduino MEGA 2560 ou similar.</p>
            <p>* Um resistor é um componente que é utilizado para controle da quantidade de energia que sera transmitida a algum outro componente.</p>
            <br>
            <h3>Montagem do Circuito:</h3>
            <p>Conecte os componentes no Arduino como mostra a figura abaixo. Verifique cuidadosamente os cabos de ligação antes de ligar seu Arduino. Lembre-se que o Arduino deve estar desconectado do computador durante a montagem.</p>
            <h3>Para ver a temperatura que o sensor está detectando:</h3>
            <p><strong>Passo 1:</strong> Vá em Ferramentas (Tools) e Monitor Serial (Serial Monitor) ou clique Ctrl+Shift+M.</p>
            <p><strong>Passo 2:</strong> Os dados coletados do sensor aparecerão nessa janela. </p>
            <p>Obs: O nome da janela pode mudar dependendo da entrada do seu arduino.</p>
        </div>
    </section>
    <?php include '../rodape.php' ?>
</body>
</html>