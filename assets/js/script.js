localStorage['temp-graph'] = "0";
console.log(localStorage['temp-graph']);

const triggerTemperatura = document.querySelector('.icon-termometro');

triggerTemperatura.addEventListener('click', function (e) {
    if (localStorage['temp-graph'] == "0") {
        localStorage['temp-graph'] = "1";


        var estacaoTempoDiv = document.querySelector('.estacao-tempo');

        var elementTempo = document.createElement('span');
        elementTempo.innerHTML = "Gráfico do tempo";

        estacaoTempoDiv.appendChild(elementTempo);


    } else {
        localStorage['temp-graph'] = "0";

        var elementTempo = document.querySelector('.estacao-tempo span');
        elementTempo.remove();
    }
});