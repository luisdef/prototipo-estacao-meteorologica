<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../global_head.php"?>
    
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/menu-bar.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <title>Temperatura com LM35</title>
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
        <h1>Temperatura com LM35</h1>
        <div class="text-project">
            <h3>Objetivo:</h3>
            <p>Criar um medidor de temperatura. Este projeto irá para fazer com que o sensor LM35 sinalize a temperatura do ambiente</p>
            <h3>Componentes necessários:</h3>
            <p>Sensor LM35;</p>
            <p>3 fios jumper;</p>
            <p>Protoboard;</p>
            <p>Um cabo USB;</p>
            <p>Um computador com a IDE do Arduino instalada;</p>
            <p>Arduino MEGA 2560.</p>
            <br>
            <p>Nesse sistema iremos medir a temperatura ambiente de certo local, para fazer isso usaremos o sensor LM35. Devemos ter cuidado ao conectar ele no arduino, ele deve estar com sua parte plana virada para a pessoa, depois disso iremos conectar em sua perna mais a direita o fio que será conectado ao GND, na sua perna mais da esquerda o fio que é conectado aos 5v e na perna do meio o fio que é conectado ao analógico 1.</p>
            <h3>Montagem do Circuito:</h3>
            <p>Conecte os componentes no Protoboard como mostra a figura abaixo. Verifique cuidadosamente os cabos de ligação antes de ligar seu Arduino. Lembre-se que o Arduino deve estar totalmente desconectado da força enquanto você monta o circuito.</p>
            <center>
                <img src="../../assets/img/projects/temperatura_com_lm35.png" alt="">
                <p>(Fio verde no analógico 1 (A1), preto no GND, vermelho no 5V)</p>
                <h3>Para ver a temperatura que o sensor está detectando:</h3>
                <p><strong>Passo 1:</strong> Vá em Ferramentas (Tools) e Monitor Serial (Serial Monitor) ou clique Ctrl+Shift+M.</p>
                <img src="../../assets/img/projects/imagem_passo1.png" alt="">
                <p><strong>Passo 2:</strong> Os dados coletados do sensor aparecerão nessa janela. </p>
                <img src="../../assets/img/projects/imagem_passo2_lm35.png" alt="">
                <p>Obs: O nome da janela pode mudar dependendo da entrada do seu arduino.</p>
                <h3>Sistema finalizado:</h3>
                <img src="../../assets/img/projects/sistema_lm35.png" alt="">
            </center>
            <center>
                <h4>Veja o vídeo abaixo com a montagem passo a passo:</h4>
                <iframe width="560" height="349" type="text/html" src="https://www.youtube.com/embed/0BtFS_0ex8U" frameborder="0" allowfullscreen></iframe>
            </center>
            
            
        </div>
    </section>
    <?php include '../rodape.php' ?>
</body>
</html>