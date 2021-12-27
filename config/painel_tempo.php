<?php include 'config/db.php' ?>

<div class="estacao-tempo">
    <div class="local">
        <?php
            $hora = date_create($t['horac']);
            $hora_atual = date_format($hora, 'H');

            if ($hora_atual >= 18 || $hora_atual <= 5) {
                echo "<img class=\"icon-tempo\" src=\"assets/img/weather-icons/night.png\" alt=\"tempo\">\n";
            } else {

                if ($t['umidade'] >= 60 && $t['temperatura'] <= 30) {
                    if ($t['umidade'] >= 80 && $t['luminosidade'] <= 2000) {
                        echo "<img class=\"icon-tempo\" src=\"assets/img/weather-icons/rain.png\" alt=\"tempo\">\n";
                    }
                    else {
                        echo "<img class=\"icon-tempo\" src=\"assets/img/weather-icons/cloudy-day.png\" alt=\"tempo\">\n";
                    }

                } else {
                    echo "<img class=\"icon-tempo\" src=\"assets/img/weather-icons/sun.png\" alt=\"tempo\">\n";
                }
            }
        ?>
        <h1>Feliz, RS</h1>
    </div>

    <div class="temperatura">
        <p class="descricao-icon">temperatura</p>
        <a onclick="addGraficoTemperatura();"><img class="icon-termometro" src="assets/img/weather-icons/celsius.png" alt="celcius"></a>
        <p>
            <?php
                echo number_format($t['temperatura'], 1, ",", ".").' °C';
            ?>
        </p>
    </div>

    <div class="humidade">
        <p class="descricao-icon">umidade</p>
        <a onclick="addGraficoUmidade();"><img class="icon-umidade" src="assets/img/weather-icons/humidity.png" alt="umidade"></a>
        <p>
            <?php
                echo number_format($t['umidade'], 1, ",", ".").' %';
            ?>
        </p>
    </div>

    <div class="pressao">
        <p class="descricao-icon">pressão atm.</p>
        <a onclick="addGraficoPressao();"><img class="icon-pressao" src="assets/img/weather-icons/pressure.png" alt="pressao"></a>
        <p>
            <?php
                echo number_format($t['pressao'], 2, ",", ".").' hPa';
            ?>
        </p>
    </div>

    <div class="lum">
        <p class="descricao-icon">luminosidade</p>
        <a onclick="addGraficoLuminosidade();"><img class="icon-lum" src="assets/img/weather-icons/lamp.png" alt="pressao"></a>
        <p>
            <?php
                echo number_format($t['luminosidade'], 1, ",", ".").' lm';
            ?>
        </p>
    </div>

    <p id="data-tempo">
        consultado
        <?php
            $data = date_create($t['datac']);
            echo ' '.date_format($data, 'd/m/Y').' às ';
            echo date_format($hora, 'H:i')
        ?>
    </p>
</div>

<div id="grafico">
</div>
