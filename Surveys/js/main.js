function calcularSumaTotal() {
    // Llamar a cada función de cálculo
    var suma1 = calcularSuma();
    var suma2 = calcularSuma2();
    var suma3 = calcularSuma3();
    var suma4 = calcularSuma4();
    var suma5 = calcularSuma5();
    var suma6 = calcularSuma6();
    var suma7 = calcularSuma7();

    // Sumar los resultados individuales
    var sumaTotal = (suma1 + suma2 + suma3 + suma4 + suma5 + suma6 + suma7)/4;
    document.getElementById("resultado").innerText = sumaTotal;
}
function calcularSuma() {
    // Inicializar la variable de suma
    var suma1 = 0;

    // Iterar sobre los radios con nombre "preguntaX" y sumar sus valores seleccionados
    for (var i = 1; i <= 15; i++) {
        var nombrePregunta = "pregunta" + i;
        var radios = document.getElementsByName(nombrePregunta);

        // Encontrar el radio seleccionado
        var radioSeleccionado = Array.from(radios).find(radio => radio.checked);

        // Sumar el valor seleccionado o 0 si no hay ninguno seleccionado
        suma1 += radioSeleccionado ? parseInt(radioSeleccionado.value) : 0;
    }

    // Mostrar el resultado
     
    return suma1;
}

function calcularSuma2() {
    // Inicializar la variable de suma
    var suma2 = 0;

    // Iterar sobre los radios con nombre "preguntaX" y sumar sus valores seleccionados
    for (var i = 1; i <= 15; i++) {
        var nombrePregunta = "pregunta" + i;
        var radios = document.getElementsByName(nombrePregunta);

        // Encontrar el radio seleccionado
        var radioSeleccionado = Array.from(radios).find(radio => radio.checked);

        // Sumar el valor seleccionado o 0 si no hay ninguno seleccionado
        suma2 += radioSeleccionado ? parseInt(radioSeleccionado.value) : 0;
    }

    // Mostrar el resultado
     
    return suma2;
}

function calcularSuma3() {
    // Inicializar la variable de suma
    var suma3 = 0;

    // Iterar sobre los radios con nombre "preguntaX" y sumar sus valores seleccionados
    for (var i = 1; i <= 15; i++) {
        var nombrePregunta = "pregunta" + i;
        var radios = document.getElementsByName(nombrePregunta);

        // Encontrar el radio seleccionado
        var radioSeleccionado = Array.from(radios).find(radio => radio.checked);

        // Sumar el valor seleccionado o 0 si no hay ninguno seleccionado
        suma3 += radioSeleccionado ? parseInt(radioSeleccionado.value) : 0;
    }

    // Mostrar el resultado
     
    return suma3;
}

function calcularSuma4() {
    // Inicializar la variable de suma
    var suma4 = 0;

    // Iterar sobre los radios con nombre "preguntaX" y sumar sus valores seleccionados
    for (var i = 1; i <= 15; i++) {
        var nombrePregunta = "pregunta" + i;
        var radios = document.getElementsByName(nombrePregunta);

        // Encontrar el radio seleccionado
        var radioSeleccionado = Array.from(radios).find(radio => radio.checked);

        // Sumar el valor seleccionado o 0 si no hay ninguno seleccionado
        suma4 += radioSeleccionado ? parseInt(radioSeleccionado.value) : 0;
    }

    // Mostrar el resultado
     
    return suma4;
}

function calcularSuma5() {
    // Inicializar la variable de suma
    var suma5 = 0;

    // Iterar sobre los radios con nombre "preguntaX" y sumar sus valores seleccionados
    for (var i = 1; i <= 15; i++) {
        var nombrePregunta = "pregunta" + i;
        var radios = document.getElementsByName(nombrePregunta);

        // Encontrar el radio seleccionado
        var radioSeleccionado = Array.from(radios).find(radio => radio.checked);

        // Sumar el valor seleccionado o 0 si no hay ninguno seleccionado
        suma5 += radioSeleccionado ? parseInt(radioSeleccionado.value) : 0;
    }

    // Mostrar el resultado
     
    return suma5;
}

function calcularSuma6() {
    // Inicializar la variable de suma
    var suma6 = 0;

    // Iterar sobre los radios con nombre "preguntaX" y sumar sus valores seleccionados
    for (var i = 1; i <= 15; i++) {
        var nombrePregunta = "pregunta" + i;
        var radios = document.getElementsByName(nombrePregunta);

        // Encontrar el radio seleccionado
        var radioSeleccionado = Array.from(radios).find(radio => radio.checked);

        // Sumar el valor seleccionado o 0 si no hay ninguno seleccionado
        suma6 += radioSeleccionado ? parseInt(radioSeleccionado.value) : 0;
    }

    // Mostrar el resultado
     
    return suma6;
}

function calcularSuma7() {
    // Obtén el formulario
    var formulario = document.getElementById("miFormulario");

    // Inicializa la variable para almacenar la suma
    var suma7 = 0;

    // Recorre los campos de entrada y suma sus valores
    for (var i = 1; i <= 10; i++) {
      var nombreCampo = "pregunta" + i;
      var valorCampo = parseInt(formulario.elements[nombreCampo].value) || 0;
      suma7 += valorCampo;
    }

    // Muestra la suma
    alert("La suma de los valores es: " + suma7);
    return suma7;
  }