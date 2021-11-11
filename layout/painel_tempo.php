<?php include 'config/db.php' ?>
<div class="estacao-tempo">
    <div class="local">
        <img class="icon-tempo" src="assets/img/weather-icons/cloudy-day.png" alt="tempo">
        <h1>Feliz, RS</h1>
    </div>

    <div class="temperatura">
        <p class="descricao-icon">temperatura</p>
        <img class="icon-termometro" src="assets/img/weather-icons/celsius.png" alt="celcius">
        <p>
            <?php
                echo number_format($t['temperatura'], 1, ",", ".").' °C';
            ?>
        </p>
    </div>

    <div class="humidade">
        <p class="descricao-icon">humidade</p>
        <img class="icon-umidade" src="assets/img/weather-icons/humidity.png" alt="umidade">
        <p>
            <?php
                echo number_format($t['umidade'], 1, ",", ".").' %';
            ?>
        </p>
    </div>

    <div class="pressao">
        <p class="descricao-icon">pressão</p>
        <img class="icon-pressao" src="assets/img/weather-icons/pressure.png" alt="pressao">
        <p>
            <?php
                echo number_format($t['pressao'], 1, ",", ".").' hPa';
            ?>
        </p>
    </div>

    <p id="data-tempo">
        consultado
        <?php
            $data = date_create($t['datac']);
            echo ' '.date_format($data, 'd/m/Y').' às ';
            $hora = date_create($t['horac']);
            echo date_format($hora, 'H:i')
        ?>
    </p>
</div>
