<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../global_head.php"?>
    
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/menu-bar.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <title>Sinaleira</title>
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
        <h1>Sinaleira</h1>
        <div class="text-project">
            <h3>Objetivo:</h3>
            <p>Criar um projeto Arduíno sinal de trânsito. Este projeto irá fazer com que os LEDs sinalizem os momentos de atenção, parar e seguir no trânsito.</p>
            <h3>Componentes necessários:</h3>
            <p>Protoboard;</p>
            <p>Três leds, um vermelho, um amarelo e um verde;</p>
            <p>Quatro fios jumper;</p>
            <p>Um resistor de 100 ohms; *</p>
            <p>Um cabo USB;</p>
            <p>Um computador com a IDE do arduino instalado;</p>
            <p>Arduino MEGA 2560.</p>
            <p>* Um resistor é um componente que é utilizado para controle da quantidade de energia que sera transmitida a algum outro componente.</p>
            <p>No led há uma configuração onde que a perna maior é ligado a entrada de energia, no caso os V, e já a menor perna é ligado ao GND(ou seja, ao Terra).</p>
            <h3>Montagem do Circuito:</h3>
            <p>Conecte os componentes no Protoboard como mostra a figura abaixo. Verifique cuidadosamente os cabos de ligação antes de ligar seu Arduino. Lembre-se que o Arduino deve estar totalmente desconectado da força enquanto você monta o circuito.</p>
            <center>
                <img src="../../assets/img/projects/print_sinaleira.png" alt="">
                <p>(Fio preto GND, vermelho digital 10, amarelo digital 9, verde digital 8)</p>
                <p>Agora, com o arduino conectado a porta USB do computador, clique em VERIFICAR e depois CARREGAR no canto superior direito do programa</p>
                <img src="../../assets/img/projects/passo1_sinaleira.png" alt="">
                <p>Após isto, o programa será passado para o Arduino e,se tudo estiver correto, os leds começarão a piscar como no gif abaixo:</p>
                <img src="../../assets/img/projects/sinaleiragif.gif" alt="">
                <h4>Veja o vídeo abaixo com a montagem passo a passo:</h4>
                <iframe width="560" height="349" type="text/html" src="https://www.youtube.com/embed/elKpyneD63c" frameborder="0" allowfullscreen></iframe>
            </center>
        </div>
    </section>
    <?php include '../rodape.php' ?>
</body>
</html>