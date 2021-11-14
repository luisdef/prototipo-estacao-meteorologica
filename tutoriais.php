<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include './layout/global_head.php' ?>
    <link rel="stylesheet" href="./assets/css/cards.css">

    <title>Tutoriais</title>
</head>
<body>
    <?php include './layout/cabecalho.php' ?>
        
    <section>
        <h1>Tutoriais</h1>
        <div class="row">
            <div class="column">
                <div class="cards">
                    <div class="video-wrapper">
                        <iframe width="560" height="349" type="text/html" src="https://www.youtube.com/embed/ch8PNBajWGY" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="container">
                        <h4><b>Luminosidade com LDR</b></h4>
                        <p>Criação de um sistema para medir a luminosidade.</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="cards">
                    <div class="video-wrapper">
                        <iframe width="560" height="349" type="text/html" src="https://www.youtube.com/embed/elKpyneD63c" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="container">
                        <h4><b>Sinaleira</b></h4>
                        <p>Criação de um projeto Arduino com sinal de trânsito.</p>
                    </div>
                </div>
            </div>
            
            <div class="column">
                <div class="cards">
                    <div class="video-wrapper">
                        <iframe width="560" height="349" type="text/html" src="https://www.youtube.com/embed/0BtFS_0ex8U" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="container">
                        <h4><b>Temperatura com LM35</b></h4>
                        <p>Criação de um sistema para medir a temperatura do ambiente.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="space"></div>
    </section>

    <?php include './layout/rodape.php' ?>
</body>
</html>