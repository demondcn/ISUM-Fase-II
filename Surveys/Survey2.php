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
          <h1 class="text-center">CUESTIONARIO DESARROLLO DE LA DIRECCIÓN GENERAL</h1>
          <br>
          <br>    
        </div>
      </section>

      <!--  Servicios  -->
      <hr>
      <section class="row">
        <div class="col-md-12">
          <h3>Desarrollo de la Dirección General.</h3>
          <p></p>
        </div>
      </section>  
      <hr>
      
      <!--  PREGUNTA 1  -->
      <form method="post">
      <section class="row">
        <div class="col-md-6">
          <p>1- ¿Cuál es la visión y misión de la empresa? ¿Son conocidas y compartidas por todos los miembros del equipo directivo? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta1" id="" value="1"> 1.Sí, la visión y misión de la empresa son conocidas y compartidas por todos los miembros del equipo directivo.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta1" id="" value="2"> 2.	Algunos miembros del equipo directivo conocen y comparten la visión y misión de la empresa, pero no todos.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta1" id="" value="3"> 3.	No, la visión y misión de la empresa no son conocidas ni compartidas por los miembros del equipo directivo.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>
      
      <!--  PREGUNTA 2  -->

      <section class="row">
        <div class="col-md-6">
          <p>2- ¿Existe un plan estratégico establecido? ¿Ha sido comunicado y se está implementando de manera efectiva? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="pregunta2a" value="1"> 1.Sí, existe un plan estratégico claro y detallado que ha sido comunicado y se está implementando de manera efectiva.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="" value="2"> 2.	Sí, existe un plan estratégico, pero no ha sido completamente comunicado o implementado de manera efectiva.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="" value="3"> 3.	No, no hay un plan estratégico establecido ni se ha comunicado o implementado efectivamente.
        </label>
        </div>

      </section>
      <br>
      <hr>
      <br>

      <!--  PREGUNTA 3  -->

      <section class="row">
        <div class="col-md-6">
          <p> 3- Existe un plan estratégico consensuado con los directivos de la empresa que se proyecta en un horizonte de tiempo de 3 a 5 años y en el momento esta actualizado  </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="pregunta3a" value="1"> 1.Sí, contamos con un plan estratégico consensuado con los directivos que se proyecta en un horizonte de tiempo de 3 a 5 años y está actualizado en el momento.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="" value="2"> 2.	Sí, tenemos un plan estratégico con los directivos, pero no se proyecta en un horizonte de tiempo específico de 3 a 5 años o no está completamente actualizado en el momento.
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="" value="3"> 3.	No, no tenemos un plan estratégico consensuado con los directivos de la empresa o no se ha actualizado en mucho tiempo.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>
      
      <!--  PREGUNTA 4  -->

      <section class="row">
          <div class="col-md-6">
            <p>4- ¿Cómo se toman las decisiones estratégicas en la organización? ¿Se sigue un proceso estructurado y participativo? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="" value="1"> 1. Se sigue un proceso estructurado y participativo.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="" value="2"> 2. A veces se sigue un proceso estructurado y participativo.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="" value="3"> 3. No se sigue un proceso estructurado y participativo.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--Pregunta 5-->

        <section class="row">
          <div class="col-md-6">
            <p>5- ¿Se fomenta y promueve la innovación en la organización? ¿Se implementan nuevas ideas y propuestas? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="pregunta5a" value="1"> 1. Sí, hay un fuerte énfasis en la innovación y se promueve activamente la generación y el desarrollo de nuevas ideas y propuestas.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="" value="2"> 2. Algunas veces se fomenta la innovación y se implementan nuevas ideas y propuestas, pero no de manera consistente o sistemática.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="" value="3"> 3. No se fomenta ni promueve la innovación en la organización y rara vez se implementan nuevas ideas o propuestas.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--  PREGUNTA 6  -->

      <section class="row">
        <div class="col-md-6">
          <p> 6- ¿Existen indicadores clave de desempeño (KPIs) establecidos para medir el éxito de la estrategia y los procesos directivos? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="" value="1"> 1.	Sí, se han establecido KPIs claros y medibles que evalúan el éxito de la estrategia y los procesos directivos.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="" value="2"> 2.	Sí, hay algunos KPIs establecidos, pero podrían ser más específicos y medibles.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="" value="3"> 3.	No, no existen KPIs establecidos para evaluar el éxito de la estrategia y los procesos directivos.
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
            <p>7- ¿Cómo se lleva a cabo la comunicación y colaboración entre los miembros del equipo directivo?</p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="" value="1"> 1. La comunicación y colaboración entre los miembros del equipo directivo se realiza de manera fluida y constante, utilizando herramientas tecnológicas modernas y fomentando reuniones periódicas para intercambiar información y tomar decisiones conjuntas.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="" value="2"> 2. La comunicación y colaboración entre los miembros del equipo directivo se lleva a cabo de forma regular, pero puede haber algunos retrasos en la transmisión de información y falta de coordinación en ciertas ocasiones.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="" value="3"> 3. La comunicación y colaboración entre los miembros del equipo directivo es limitada, hay poca interacción y falta de coordinación, lo que puede llevar a retrasos en la toma de decisiones y dificultades para trabajar en equipo.
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
            <p>8- ¿Se realizan reuniones periódicas con el equipo directivo para abordar temas estratégicos y evaluar el progreso? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="pregunta8a" value="1"> 1. Sí, se realizan reuniones periódicas con el equipo directivo para abordar temas estratégicos y evaluar el progreso.
          </label>
          </div>
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="" value="2"> 2. A veces, se realizan reuniones periódicas con el equipo directivo para abordar temas estratégicos y evaluar el progreso.
          </label>
          </div>
          <div class="col-md-6"></div>

          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="" value="2"> 3. No, no se realizan reuniones periódicas con el equipo directivo para abordar temas estratégicos y evaluar el progreso.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--Pregunta 9-->

        <section class="row">
          <div class="col-md-6">
            <p>9- ¿Se fomenta el desarrollo y crecimiento de las habilidades directivas dentro del equipo? </p>
          </div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="pregunta9a" value="1"> 1. Sí, se fomenta activamente el desarrollo y crecimiento de las habilidades directivas del equipo.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="" value="2"> 2. En cierta medida, se ofrece apoyo y oportunidades para el desarrollo de habilidades directivas.
          </label>
          </div>

          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="" value="3"> 3. No, el desarrollo y crecimiento de las habilidades directivas no son una prioridad dentro del equipo.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--  PREGUNTA 10  -->

      <section class="row">
        <div class="col-md-6">
          <p>10- ¿Se han establecido mecanismos de seguimiento y evaluación del desempeño del área de Dirección General? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="pregunta10a" value="1"> 1. Sí, se han establecido mecanismos de seguimiento y evaluación del desempeño del área de Dirección General y son altamente efectivos.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="" value="2"> 2. Sí, se han establecido mecanismos de seguimiento y evaluación del desempeño del área de Dirección General, pero podrían mejorarse.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="" value="3"> 3. No, no se han establecido mecanismos de seguimiento y evaluación del desempeño del área de Dirección General.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>

      <!--  PREGUNTA 11  -->

      <section class="row">
        <div class="col-md-6">
          <p>11- ¿Cómo se ha implementado la mejora continua en los procesos directivos de la organización? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta11" id="pregunta11a" value="1"> 1. Se han establecido sistemas de gestión de calidad basados en estándares reconocidos internacionalmente, como ISO 9001, y se realizan auditorías periódicas para asegurar el cumplimiento y la mejora continua de los procesos directivos.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta11" id="" value="2"> 2. Se han realizado algunas iniciativas de mejora continua en los procesos directivos, pero no se cuenta con un sistema formal de gestión de calidad ni se realizan auditorías periódicas.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta11" id="" value="3"> 3. No se ha implementado ninguna mejora continua en los procesos directivos de la organización.
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
              for ($i = 1; $i <= 11; $i++) {
                  $nombrePregunta = "pregunta" . $i;
                  if (isset($_POST[$nombrePregunta])) {
                      $sumaRespuestas += intval($_POST[$nombrePregunta]);
                  }
              }

              // Obtener el ID de sesión del usuario (debes reemplazar 'id_de_sesion' por tu método real de obtención de la sesión)
              $idSesion = $_SESSION['userid'];

              // Insertar la encuesta en la tabla Surveys
              $sqlSurvey = "UPDATE surveys SET s2 = $sumaRespuestas where id = $idSesion";
            

              if ($conn->query($sqlSurvey) === TRUE) {
                  echo "La encuesta se ha insertado correctamente en la tabla 'Surveys'.";
                  echo "<script>window.location.href = 'Survey3.php';</script>";
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
          <a href="Survey3.php"><button type="submit" name="submit" class="btn btn-info" id="saveForm" value="holis">Continuar</button></a>
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