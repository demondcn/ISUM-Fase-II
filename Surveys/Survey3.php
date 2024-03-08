<?php
  session_start();

  include ("../core/conexion.php");

  // Verificar si el usuario ha iniciado sesión y obtener el ID
  if (isset($_SESSION['userid'])) {
      $userId = $_SESSION['userid'];
  } else {
      // Redirigir al usuario a la página de inicio de sesión si no ha iniciado sesión
      header("Location: ../index.php");
      exit();
  }  
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="../Icons/logo.png" type="image/ico" />
    <title>VENTAS Y MARKETING</title>

</head>
<body>
<div class="containerP">
    <br />
    <div class="container">
      <section class="row">
          <!--encabezado-->
        <div class="col-md-12">
          <h1 class="text-center">CUESTIONARIO DESARROLLO DEL ÁREA DE FINANZAS</h1>
          <br>
          <br>    
        </div>
      </section>

      <!--  Servicios  -->
      <hr>
      <section class="row">
        <div class="col-md-12">
          <h3>Desarrollo del Área de Finanzas.</h3>
          <p></p>
        </div>
      </section>  
      <hr>
      
      <!--  PREGUNTA 1  -->
      <form method="post">
      <section class="row">
        <div class="col-md-6">
          <p>1- ¿Cuál es el nivel de automatización de los procesos financieros en la empresa? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta1" id="pregunta1a" value="1"> 1. Todos los procesos financieros están completamente automatizados, incluyendo la contabilidad, facturación y nómina.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
            <input type="radio" name="pregunta1" id="preguntab" value="2"> 2.	Algunos procesos financieros están semi-automatizados, como la emisión de facturas electrónicas, pero otros aún se realizan manualmente.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta1" id="preguntac" value="3"> 3.	Los procesos financieros son principalmente manuales y no se utiliza ninguna tecnología para agilizar o automatizar las tareas financieras.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>
      
      <!--  PREGUNTA 2  -->

      <section class="row">
        <div class="col-md-6">
          <p>2- ¿La empresa cuenta con un sistema de contabilidad confiable y actualizado?
 </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="pregunta2a" value="1"> 1. Sí, la empresa cuenta con un sistema de contabilidad confiable y actualizado.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="preguntab" value="2"> 2.	No puedo afirmarlo con certeza, hay algunas áreas en las que podemos mejorar la confiabilidad y actualización del sistema de contabilidad. 
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="preguntac" value="3"> 3.	No, la empresa no cuenta con un sistema de contabilidad confiable y actualizado.
        </label>
        </div>

      </section>
      <br>
      <hr>
      <br>

      <!--  PREGUNTA 3  -->

      <section class="row">
        <div class="col-md-6">
          <p> 3- ¿Se realizan conciliaciones bancarias de forma regular y precisa? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="pregunta3a" value="1"> 1. Sí, se realizan conciliaciones bancarias de forma regular y precisa.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="preguntab" value="2"> 2.	A veces se realizan conciliaciones bancarias, pero no siempre son precisas.
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="preguntac" value="3"> 3.	No se realizan conciliaciones bancarias de forma regular ni precisa.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>
      
      <!--  PREGUNTA 4  -->

      <section class="row">
          <div class="col-md-6">
            <p>4- ¿Se generan informes financieros o estados financieros de manera oportuna y precisa? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="pregunta1a" value="1"> 1. Sí, se generan informes financieros o estados financieros de manera oportuna y precisa.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="preguntab" value="2"> 2. A veces se sigue un proceso estructurado y participativo.2.	A veces se generan informes financieros o estados financieros de manera oportuna y precisa.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="preguntac" value="3"> 3. No, no se generan informes financieros o estados financieros de manera oportuna y precisa.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--Pregunta 5-->

        <section class="row">
          <div class="col-md-6">
            <p>5- ¿Se lleva a cabo una gestión eficiente de los flujos de efectivo y las finanzas a corto y largo plazo? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="pregunta5a" value="1"> 1. Sí, se cuenta con un sistema eficiente de administración financiera que se enfoca en optimizar los flujos de efectivo y las finanzas a corto y largo plazo.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="preguntab" value="2"> 2. En cierta medida, se realizan esfuerzos para gestionar los flujos de efectivo y las finanzas a corto y largo plazo, pero existen áreas de mejora.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="preguntac" value="3"> 3. No, no se cuenta con una gestión eficiente de los flujos de efectivo y las finanzas a corto y largo plazo, lo que afecta negativamente el funcionamiento del negocio.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--  PREGUNTA 6  -->

      <section class="row">
        <div class="col-md-6">
          <p> 6- ¿Existen políticas claras y eficientes para la gestión de inventarios, compras y gastos? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="pregunta1a" value="1"> 1. Sí, existen políticas claras y bien definidas que optimizan la gestión de inventarios, compras y gastos.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="preguntab" value="2"> 2.	Sí, existen políticas, pero su eficiencia puede mejorar en la gestión de inventarios, compras y gastos.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="preguntac" value="3"> 3.	No, no existen políticas claras ni eficientes para la gestión de inventarios, compras y gastos.
        </label>
        </div>
        <div class="col-md-6"></div>
      </section>
      <br>
      <hr>
      <br>


        <!--Pregunta 7-->

        <section class="row">
          <div class="col-md-6">
            <p>7- ¿Se realizan análisis de rentabilidad y eficiencia de los proyectos o inversiones de la empresa? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="pregunta1a" value="1"> 1. Sí, se realizan análisis detallados de rentabilidad y eficiencia de todos los proyectos o inversiones de la empresa.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="preguntab" value="2"> 2. A veces se llevan a cabo análisis de rentabilidad y eficiencia de los proyectos o inversiones, pero no de manera consistente.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="preguntac" value="3"> 3. No se realizan análisis de rentabilidad y eficiencia de los proyectos o inversiones de la empresa.
          </label>
          </div>

          <div class="col-md-6"></div>
        </section>
        <br>
        <hr>
        <br>

        <!--Pregunta 8-->

        <section class="row">
          <div class="col-md-6">
            <p>8- ¿Se lleva un seguimiento de los indicadores financieros clave, como el retorno de la inversión (ROI) o el margen de rentabilidad? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="pregunta8a" value="1"> 1. Sí, se realiza un seguimiento riguroso de los indicadores financieros clave, incluyendo el ROI y el margen de rentabilidad.
          </label>
          </div>
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="preguntab" value="2"> 2. En cierta medida, se lleva a cabo un seguimiento de los indicadores financieros clave, pero no de manera completa.
          </label>
          </div>
          <div class="col-md-6"></div>

          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="preguntab" value="2"> 3. No, no se realiza un seguimiento de los indicadores financieros clave como el ROI o el margen de rentabilidad.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--Pregunta 9-->

        <section class="row">
          <div class="col-md-6">
            <p>9- ¿La empresa cuenta con un sistema de control interno eficiente para prevenir fraudes y errores financieros? </p>
          </div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="pregunta9a" value="1"> 1. Sí, la empresa cuenta con un sistema de control interno totalmente eficiente y actualizado que previene fraudes y errores financieros de manera efectiva.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="preguntab" value="2"> 2. Sí, la empresa cuenta con un sistema de control interno adecuado que ha demostrado ser efectivo en la prevención de fraudes y errores financieros, aunque puede haber margen de mejora.
          </label>
          </div>

          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="preguntac" value="3"> 3. Sí, la empresa cuenta con algún tipo de sistema de control interno, pero no se considera eficiente en la prevención de fraudes y errores financieros.
          </label>
          </div>

          <div class="col-md-6"></div>

          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="preguntad" value="4"> 4. No, la empresa no cuenta con un sistema de control interno eficiente para prevenir fraudes y errores financieros, pero se está trabajando activamente para implementarlo.
          </label>
          </div>

          <div class="col-md-6"></div>

          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="preguntae" value="5"> 5. No, la empresa no cuenta con un sistema de control interno eficiente para prevenir fraudes y errores financieros en este momento, pero están considerando implementarlo en el futuro cercano.
          </label>
          </div>

          <div class="col-md-6"></div>

          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="preguntaf" value="6"> 6. No, la empresa no cuenta con ningún tipo de sistema de control interno para prevenir fraudes y errores financieros.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--  PREGUNTA 10  -->

      <section class="row">
        <div class="col-md-6">
          <p>10- ¿Se realiza una adecuada planificación fiscal y cumplimiento de las obligaciones tributarias? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="pregunta10a" value="1"> 1. Sí, se realiza una planificación fiscal óptima y se cumplen meticulosamente todas las obligaciones tributarias.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="preguntab" value="2"> 2. A veces se realiza una planificación fiscal adecuada y se cumplen la mayoría de las obligaciones tributarias.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="preguntac" value="3"> 3. No, no se realiza una adecuada planificación fiscal y no se cumplen adecuadamente las obligaciones tributarias.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>

      <!--  PREGUNTA 11  -->

      <section class="row">
        <div class="col-md-6">
          <p>11- ¿El área de Finanzas está involucrada en la toma de decisiones estratégicas de la empresa? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta11" id="pregunta11a" value="1"> 1. Sí, el área de Finanzas es clave en la toma de decisiones estratégicas de la empresa.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta11" id="preguntab" value="2"> 2. En cierta medida, el área de Finanzas participa en la toma de decisiones estratégicas de la empresa.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta11" id="preguntac" value="3"> 3. No, el área de Finanzas no está involucrada en la toma de decisiones estratégicas de la empresa.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>

      <!--  PREGUNTA 12  -->

      <section class="row">
        <div class="col-md-6">
          <p>12- ¿Se fomenta una cultura de control y gestión financiera a todos los niveles de la organización? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta12" id="pregunta11a" value="1"> 1. Sí, se fomenta una cultura de control y gestión financiera en todos los niveles de la organización. Los empleados están capacitados en temas financieros y se les ofrece herramientas para tomar decisiones informadas.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta12" id="preguntab" value="2"> 2. Se fomenta en cierta medida una cultura de control y gestión financiera en algunos niveles de la organización. Algunos empleados pueden tener conocimientos básicos en temas financieros, pero no existe un enfoque sistemático en toda la empresa.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta12" id="preguntac" value="3"> 3. No se fomenta una cultura de control y gestión financiera en ninguno de los niveles de la organización. Los empleados carecen de conocimientos y herramientas financieras, lo que puede resultar en decisiones poco informadas y riesgos financieros.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>
      <?php
          // Verificar si se ha enviado el formulario
          if ($_SERVER["REQUEST_METHOD"] == "POST") {

              // Inicializar la suma de respuestas
              $sumaRespuestas = 0;

              // Sumar los valores de las respuestas de cada pregunta
              for ($i = 1; $i <= 12; $i++) {
                  $nombrePregunta = "pregunta" . $i;
                  if (isset($_POST[$nombrePregunta])) {
                      $sumaRespuestas += intval($_POST[$nombrePregunta]);
                  }
              }

              // Obtener el ID de sesión del usuario (debes reemplazar 'id_de_sesion' por tu método real de obtención de la sesión)
              $idSesion = $_SESSION['userid'];

              // Insertar la encuesta en la tabla Surveys
              $sqlSurvey = "UPDATE surveys SET s3 = $sumaRespuestas where id = $idSesion";

              if ($conn->query($sqlSurvey) === TRUE) {
                  echo "La encuesta se ha insertado correctamente en la tabla 'Surveys'.";
                  echo "<script>window.location.href = 'Survey4.php';</script>";
                  exit; // Asegúrate de salir del script después de redirigir
              } else {
                  echo "Error al insertar la encuesta en la tabla 'Surveys': " . $conn->error;
              }

              // Obtener el ID generado para la encuesta
              $encuestaId = $conn->insert_id;

              // Insertar en la tabla userE para vincular el usuario y la encuesta
              $sqlUserSurvey = "INSERT INTO userE (nameE, nitE, pass) VALUES ('', '', '')";

              if ($conn->query($sqlUserSurvey) === TRUE) {
                  echo "Vinculación de usuario y encuesta exitosa en la tabla 'userE'.";
              } else {
                  echo "Error al vincular usuario y encuesta en la tabla 'userE': " . $conn->error;
              }
          }
          ?>
      
      <section class="row">
        <div class="col-md-12">
          <a href="Survey4.php"><button type="submit" name="submit" class="btn btn-info" id="saveForm" value="holis">Continuar</button></a>
        </div>
      </section>
    </div>
  </form>

    <br /><br />
    <footer class="container">
      <p>Todos los derechos reservados para Cristhian Mateo Ramirez Rubiano y la Universidad de Cundinamarca</p>
    </footer>
</div>    
</body>
<script src="js/main.js"></script>

</html>