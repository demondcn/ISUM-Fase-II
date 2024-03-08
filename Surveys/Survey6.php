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
    <title>TECNOLOGIAS DE LA INFORMACIÓN</title>

</head>
<body>
<div class="containerP">
    <br />
    <div class="container">
      <section class="row">
          <!--encabezado-->
        <div class="col-md-12">
          <h1 class="text-center">CUESTIONARIO DESARROLLO DE TECNOLOGIAS DE LA INFORMACIÓN</h1>
          <br>
          <br>    
        </div>
      </section>

      <!--  Servicios  -->
      <hr>
      <section class="row">
        <div class="col-md-12">
          <h3>Tecnologias de la Información.</h3>
          <p></p>
        </div>
      </section>  
      <hr>
      
      <!--  PREGUNTA 1  -->
      <form method="post">
      <section class="row">
        <div class="col-md-6">
          <p>1- ¿Cuál es el propósito principal de la función de Tecnologías de la Información en nuestra organización? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta1" id="pregunta1a" value="1"> 1. El propósito principal de la función de Tecnologías de la Información en nuestra organización es impulsar la innovación, mejorar la eficiencia operativa y brindar soluciones tecnológicas avanzadas que respalden la estrategia y el crecimiento de la empresa.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta1" id="preguntab" value="2"> 2.	La función de Tecnologías de la Información tiene como propósito mejorar la infraestructura tecnológica y garantizar el funcionamiento de sistemas y aplicaciones, aunque aún hay oportunidades para aprovechar plenamente su potencial estratégico.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta1" id="preguntac" value="3"> 3.	La función de Tecnologías de la Información tiene un propósito limitado y se enfoca principalmente en mantener la infraestructura existente sin contribuir significativamente a la estrategia de la organización, lo que requiere una revisión de su papel en la empresa.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>
      
      <!--  PREGUNTA 2  -->

      <section class="row">
        <div class="col-md-6">
          <p>2- ¿Qué estrategias se han implementado para alinear la TI con los objetivos comerciales de la empresa? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="pregunta2a" value="1"> 1. Hemos implementado estrategias integrales que garantizan una alineación perfecta de la TI con nuestros objetivos comerciales, con un enfoque estratégico y una inversión significativa en tecnología.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="preguntab" value="2"> 2.	Hemos implementado algunas estrategias para alinear la TI con los objetivos comerciales, aunque aún hay áreas en las que podemos mejorar y fortalecer esta alineación.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="preguntac" value="3"> 3.	No hemos implementado estrategias significativas para alinear la TI con los objetivos comerciales, lo que requiere una atención urgente para mejorar nuestra estrategia tecnológica.
        </label>
        </div>

      </section>
      <br>
      <hr>
      <br>

      <!--  PREGUNTA 3  -->

      <section class="row">
        <div class="col-md-6">
          <p> 3- ¿Qué medidas se están tomando para garantizar la seguridad de la información y proteger los datos de la empresa? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="pregunta3a" value="1"> 1. Hemos implementado un conjunto completo de medidas de seguridad de la información y protección de datos que cumplen con los estándares más altos, incluyendo sistemas de encriptación avanzados, capacitación regular en ciberseguridad y una política de acceso estrictamente controlada.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="preguntab" value="2"> 2.	Hemos tomado algunas medidas para garantizar la seguridad de la información y proteger los datos, aunque aún hay áreas en las que podemos fortalecer nuestras prácticas de seguridad.
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="preguntac" value="3"> 3.	No hemos tomado medidas significativas para garantizar la seguridad de la información y proteger los datos de la empresa, lo que representa un riesgo significativo que requiere una revisión urgente de nuestras políticas de seguridad.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>
      
      <!--  PREGUNTA 4  -->

      <section class="row">
          <div class="col-md-6">
            <p>4- ¿Cuáles son las principales inversiones en tecnología que se han realizado en los últimos años? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="pregunta1a" value="1"> 1. Hemos realizado inversiones significativas en tecnología, incluyendo la implementación de sistemas avanzados de gestión, actualización de infraestructura de servidores y adopción de tecnologías emergentes como la inteligencia artificial y el Internet de las cosas (IoT).
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="preguntab" value="2"> 2. Hemos realizado algunas inversiones en tecnología, como la actualización de software y hardware, aunque aún hay margen para inversiones más estratégicas.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="preguntac" value="3"> 3. No hemos realizado inversiones significativas en tecnología en los últimos años, lo que requiere una revisión urgente de nuestra estrategia tecnológica.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--Pregunta 5-->

        <section class="row">
          <div class="col-md-6">
            <p>5- ¿Cuál es el estado actual de la infraestructura tecnológica de la empresa? (redes, servidores, software, etc.) </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="pregunta5a" value="1"> 1. Nuestra infraestructura tecnológica se encuentra en un estado excelente, con sistemas actualizados, redes de alta velocidad y servidores de vanguardia que respaldan eficientemente nuestras operaciones.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="preguntab" value="2"> 2. La infraestructura tecnológica de la empresa está en un estado aceptable, aunque algunos sistemas pueden necesitar actualizaciones y mejoras para alcanzar su pleno potencial.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="preguntac" value="3"> 3. El estado de nuestra infraestructura tecnológica es deficiente, con sistemas obsoletos, problemas de red y servidores poco confiables, lo que requiere una inversión urgente en actualización y mejora.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--  PREGUNTA 6  -->

      <section class="row">
        <div class="col-md-6">
          <p> 6- ¿Qué medidas se han tomado para garantizar la disponibilidad y el rendimiento de los sistemas informáticos? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="pregunta1a" value="1"> 1. Hemos implementado medidas exhaustivas que garantizan la disponibilidad y el rendimiento óptimo de nuestros sistemas informáticos, incluyendo redundancia de servidores, monitoreo constante y mantenimiento preventivo.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="preguntab" value="2"> 2.	Hemos tomado algunas medidas para garantizar la disponibilidad y el rendimiento de los sistemas informáticos, aunque aún hay áreas en las que podemos mejorar y fortalecer nuestras prácticas.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="preguntac" value="3"> 3.	No hemos tomado medidas significativas para garantizar la disponibilidad y el rendimiento de los sistemas informáticos, lo que representa un riesgo significativo que requiere una revisión urgente de nuestras políticas de gestión de sistemas.
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
            <p>7- ¿Qué procesos de gestión de proyectos se están utilizando en el área de TI? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="pregunta1a" value="1"> 1. Estamos utilizando procesos de gestión de proyectos de clase mundial en el área de TI, como el enfoque ágil y las mejores prácticas de PMI (Project Management Institute) para garantizar la ejecución eficiente y exitosa de nuestros proyectos.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="preguntab" value="2"> 2. Utilizamos algunos procesos de gestión de proyectos en el área de TI, aunque aún hay áreas donde podemos fortalecer nuestras prácticas y adoptar enfoques más avanzados.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="preguntac" value="3"> 3. No utilizamos procesos significativos de gestión de proyectos en el área de TI, lo que requiere una revisión urgente de nuestras prácticas para mejorar la ejecución de proyectos tecnológicos.
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
            <p>8- ¿Cómo se mide y evalúa el rendimiento del área de TI? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="pregunta8a" value="1"> 1. Medimos y evaluamos el rendimiento del área de TI de manera exhaustiva, utilizando indicadores clave de rendimiento (KPI) alineados con los objetivos comerciales, evaluaciones de satisfacción del cliente interno y auditorías periódicas de seguridad.
          </label>
          </div>
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="preguntab" value="2"> 2. Realizamos alguna medición y evaluación del rendimiento del área de TI, aunque aún hay áreas en las que podemos mejorar y adoptar enfoques más avanzados.
          </label>
          </div>
          <div class="col-md-6"></div>

          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="preguntab" value="2"> 3. No medimos ni evaluamos de manera significativa el rendimiento del área de TI, lo que requiere una revisión urgente de nuestras prácticas para garantizar la eficiencia y la alineación con los objetivos comerciales.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--Pregunta 9-->

        <section class="row">
          <div class="col-md-6">
            <p>9- ¿Cuáles son los principales desafíos actuales en términos de tecnología de la información en nuestra organización? </p>
          </div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="pregunta9a" value="1"> 1. Estamos abordando de manera efectiva los desafíos actuales en tecnología de la información y hemos implementado estrategias sólidas para superarlos.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="preguntab" value="2"> 2. Hemos identificado algunos desafíos en tecnología de la información y estamos trabajando en soluciones, aunque aún hay trabajo por hacer.
          </label>
          </div>

          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="preguntac" value="3"> 3. Los desafíos en tecnología de la información son significativos y no hemos tomado medidas efectivas para abordarlos, lo que requiere atención inmediata.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--  PREGUNTA 10  -->

      <section class="row">
        <div class="col-md-6">
          <p>10- ¿Qué planes y metas se tienen establecidos para el desarrollo futuro del área de TI? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="pregunta10a" value="1"> 1. Tenemos planes y metas sólidos y bien definidos para el desarrollo futuro del área de TI, incluyendo inversiones estratégicas y objetivos claros alineados con la visión de la empresa.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="preguntab" value="2"> 2. Tenemos algunos planes y metas establecidos para el desarrollo futuro del área de TI, aunque aún hay áreas en las que podemos mejorar la definición y la ejecución de estos planes.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="preguntac" value="3"> 3. No tenemos planes ni metas significativas establecidos para el desarrollo futuro del área de TI, lo que requiere una atención urgente para definir una estrategia tecnológica sólida.
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
              for ($i = 1; $i <= 10; $i++) {
                  $nombrePregunta = "pregunta" . $i;
                  if (isset($_POST[$nombrePregunta])) {
                      $sumaRespuestas += intval($_POST[$nombrePregunta]);
                  }
              }

              // Obtener el ID de sesión del usuario (debes reemplazar 'id_de_sesion' por tu método real de obtención de la sesión)
              $idSesion = $_SESSION['userid'];

              // Insertar la encuesta en la tabla Surveys
              $sqlSurvey = "UPDATE surveys SET s6 = $sumaRespuestas where id = $idSesion";

              if ($conn->query($sqlSurvey) === TRUE) {
                  echo "La encuesta se ha insertado correctamente en la tabla 'Surveys'.";
                  echo "<script>window.location.href = 'Survey7.php';</script>";
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
          <a href="Survey7.php"><button type="submit" name="submit" class="btn btn-info" id="saveForm" value="holis">Continuar</button></a>
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