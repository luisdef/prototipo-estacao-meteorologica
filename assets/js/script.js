
function isElementoGrafico(graf) {
    /**
     * Retorna a informação do elemento do referido gráfico.
     * 
     * temp = retorna info do gráfico de temperatura.
     * umid = retorna info do gráfico de umidade.
     * pressao = retorna info do gráfico de pressão.
     * lum = retorna info do gráfico de luminosidade.
    */

    if (graf == "temp") {
        let tempG = document.getElementById("grafico-temp");
        if (tempG != null) {
            return true;
        }
    }

    else if (graf == "umid") {
        let umidG = document.getElementById("grafico-umid");
        if (umidG != null) {
            return true;
        }
    }

    else if (graf == "pressao") {
        let pressaoG = document.getElementById("grafico-pressao");
        if (pressaoG != null) {
            return true;
        }
    }

    else if (graf == "lum") {
        let lumG = document.getElementById("grafico-lum");
        if (lumG != null) {
            return true;
        }
    }
}

console.log(isElementoGrafico("temp"));

function addGraficoTemperatura() {
    if (!isElementoGrafico("temp")) {        
        let grafTemp = document.createElement("div");
        grafTemp.setAttribute("id", "grafico-temp");
        document.getElementById("grafico").appendChild(grafTemp);

        let textGrafTemp = document.createElement("p");
        textGrafTemp.innerText = "Gráfico da temperatura";
        document.getElementById("grafico-temp").appendChild(textGrafTemp);

        let grafico = document.createElement("canvas");
        grafico.setAttribute("id", "myChart");
        grafico.setAttribute("style", "font-size: 1.1rem; width:100%; height: 17rem; display: flex");
        document.getElementById("grafico-temp").appendChild(grafico);

        var xValues = [
            "10/11",
            "11/11",
            "12/11",
            "13/11",
            "14/11",
            "15/11",
            "16/11"
        ];
        var yValues = [
            22.3,
            26.3,
            33.5,
            38.2,
            19,
            26.5,
            33
        ];
        
        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "rgba(235,100,0,0.5)",
                    borderColor: "rgba(235,0,100,1.0)",
                    data: yValues
                }]
            },
            options: {
                legend: {display: false},
                scales: {
                    yAxes: [
                        {
                            ticks: {
                                min: 10,
                                max: 50
                            }
                        }
                    ],
                }
            }
        });

    }
}

function addGraficoUmidade() {
    if (!isElementoGrafico("umid")) {        
        let grafTemp = document.createElement("div");
        grafTemp.setAttribute("id", "grafico-umid");
        document.getElementById("grafico").appendChild(grafTemp);

        let textGrafTemp = document.createElement("p");
        textGrafTemp.innerText = "Gráfico da umidade";
        document.getElementById("grafico-umid").appendChild(textGrafTemp);
    }
}

function addGraficoPressao() {
    if (!isElementoGrafico("pressao")) {        
        let grafTemp = document.createElement("div");
        grafTemp.setAttribute("id", "grafico-pressao");
        document.getElementById("grafico").appendChild(grafTemp);

        let textGrafTemp = document.createElement("p");
        textGrafTemp.innerText = "Gráfico da pressão atm.";
        document.getElementById("grafico-pressao").appendChild(textGrafTemp);
    }
}

function addGraficoLuminosidade() {
    if (!isElementoGrafico("lum")) {        
        let grafTemp = document.createElement("div");
        grafTemp.setAttribute("id", "grafico-lum");
        document.getElementById("grafico").appendChild(grafTemp);

        let textGrafTemp = document.createElement("p");
        textGrafTemp.innerText = "Gráfico da luminosidade";
        document.getElementById("grafico-lum").appendChild(textGrafTemp);
    }
}