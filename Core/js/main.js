// guardar todos los datos.

function calcularSuma() {
    var suma = 0;
    for (var i = 1; i <= 2; i++) {
        var nombrePregunta = "pregunta" + i;

        var valorSeleccionado = document.querySelector('input[name="' + nombrePregunta + '"]:checked');

        if (valorSeleccionado) {
            suma = suma + parseInt(valorSeleccionado.value);
        }
    }
    // Supongamos que tienes un resultado en JavaScript
    var resultado = suma;
    // Obtén el elemento HTML donde quieres mostrar el resultado
    var resultadoElemento = document.getElementById("resultado");
    // Asigna el resultado al contenido del elemento HTML
    resultadoElemento.textContent = resultado;
}