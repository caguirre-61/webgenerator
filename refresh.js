document.addEventListener("DOMContentLoaded", () => {
    refreshDatos();
    refreshId = setInterval(refreshDatos, 10000);
});

function refreshDatos(cont) {
    // 1. Incremento de Temperatura
    let valorTemp = document.querySelector("#temp-int");
    if (valorTemp) {
        valorTemp.innerHTML = (parseInt(valorTemp.innerHTML) + 1);
    }

    // 2. Incremento de Humedad (humed-unit)
    let valorHumed = document.querySelector("#humed-int");
    if (valorHumed) {
        valorHumed.innerHTML = (parseInt(valorHumed.innerHTML) + 1);
    }

    // 3. Incremento de Viento (viento-unit)
    let valorViento = document.querySelector("#viento-int");
    if (valorViento) {
        valorViento.innerHTML = (parseInt(valorViento.innerHTML) + 1);
    }

    // 4. Incremento de Incendio (incendio-unit)
    let valorIncendio = document.querySelector("#incendio-int");
    if (valorIncendio) {
        valorIncendio.innerHTML = (parseInt(valorIncendio.innerHTML) + 1);
    }
}