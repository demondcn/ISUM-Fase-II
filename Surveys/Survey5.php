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
    <title>PRODUCCIÓN Y OPERACIONES</title>

</head>
<body>
<div class="containerP">
    <br />
    <div class="container">
      <section class="row">
          <!--encabezado-->
        <div class="col-md-12">
          <h1 class="text-center">CUESTIONARIO DESARROLLO DE PRODUCCIÓN Y OPERACIONES </h1>
          <br>
          <br>    
        </div>
      </section>

      <!--  Servicios  -->
      <hr>
      <section class="row">
        <div class="col-md-12">
          <h3>Produccion y Operaciones.</h3>
          <p></p>
        </div>
      </section>  
      <hr>
      
      <!--  PREGUNTA 1  -->
      <form method="post">
      <section class="row">
        <div class="col-md-6">
          <p>1- ¿Cuántos productos o servicios hemos ampliado o introducido al mercado en los últimos años? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta1" id="pregunta1a" value="1"> 1. Hemos ampliado o introducido múltiples productos o servicios con éxito en los últimos años, lo que ha contribuido significativamente al crecimiento de nuestra empresa.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta1" id="preguntab" value="2"> 2.	Hemos ampliado o introducido algunos productos o servicios en los últimos años, pero no en gran cantidad ni con un impacto significativo en nuestro crecimiento.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta1" id="preguntac" value="3"> 3.	No hemos ampliado ni introducido nuevos productos o servicios en los últimos años, lo que requiere una atención inmediata para diversificar nuestro portafolio.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>
      
      <!--  PREGUNTA 2  -->

      <section class="row">
        <div class="col-md-6">
          <p>2- ¿Cuál ha sido el crecimiento porcentual de nuestra capacidad de producción en los últimos años? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="pregunta2a" value="1"> 1. Hemos experimentado un crecimiento porcentual significativo en nuestra capacidad de producción en los últimos años, superando ampliamente las expectativas.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="preguntab" value="2"> 2.	Hemos experimentado un crecimiento porcentual moderado en nuestra capacidad de producción en los últimos años, en línea con las metas establecidas.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="preguntac" value="3"> 3.	Nuestro crecimiento porcentual en capacidad de producción en los últimos años ha sido limitado o nulo, lo que requiere una revisión urgente de nuestras estrategias de crecimiento.
        </label>
        </div>

      </section>
      <br>
      <hr>
      <br>

      <!--  PREGUNTA 3  -->

      <section class="row">
        <div class="col-md-6">
          <p> 3- ¿Cómo han mejorado nuestros tiempos de entrega y cumplimiento de pedidos? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="pregunta3a" value="1"> 1. Nuestros tiempos de entrega se han reducido significativamente y nuestro cumplimiento de pedidos es excepcional, superando consistentemente las expectativas de nuestros clientes.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="preguntab" value="2"> 2.	Hemos realizado mejoras en nuestros tiempos de entrega y cumplimiento de pedidos, aunque aún hay margen para seguir mejorando y mantenernos competitivos.
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="preguntac" value="3"> 3.	No hemos experimentado mejoras significativas en nuestros tiempos de entrega y cumplimiento de pedidos, lo que requiere una revisión urgente de nuestros procesos operativos.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>
      
      <!--  PREGUNTA 4  -->

      <section class="row">
          <div class="col-md-6">
            <p>4- ¿Cuántas nuevas tecnologías o herramientas hemos implementado en el área de producción u operaciones? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="pregunta1a" value="1"> 1. Hemos implementado múltiples nuevas tecnologías y herramientas en el área de producción u operaciones, lo que ha mejorado significativamente nuestra eficiencia y competitividad.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="preguntab" value="2"> 2. Hemos implementado algunas nuevas tecnologías y herramientas en el área de producción u operaciones, pero aún hay margen para expandir estas innovaciones.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="preguntac" value="3"> 3. No hemos implementado nuevas tecnologías o herramientas en el área de producción u operaciones, lo que requiere una revisión urgente de nuestra estrategia tecnológica.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--Pregunta 5-->

        <section class="row">
          <div class="col-md-6">
            <p>5- ¿Cuál ha sido el porcentaje de reducción de costos en la producción? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="pregunta5a" value="1"> 1. Hemos logrado una reducción de costos en la producción superior al 20%, lo que ha mejorado significativamente nuestra rentabilidad y eficiencia.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="preguntab" value="2"> 2. Hemos logrado una reducción de costos en la producción entre el 10% y el 20%, lo que representa un avance significativo pero aún hay margen para mejorar.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="preguntac" value="3"> 3. No hemos logrado una reducción significativa de costos en la producción, lo que requiere una revisión urgente de nuestras estrategias de eficiencia.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--  PREGUNTA 6  -->

      <section class="row">
        <div class="col-md-6">
          <p> 6- ¿Cómo hemos mejorado la eficiencia y productividad de nuestro personal en el área de producción u operaciones? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="pregunta1a" value="1"> 1. Hemos implementado una serie de medidas y programas de capacitación que han llevado a una mejora sustancial en la eficiencia y productividad de nuestro personal en el área de producción u operaciones.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="preguntab" value="2"> 2.	Hemos realizado algunas mejoras en la eficiencia y productividad del personal en el área de producción u operaciones, pero aún hay áreas en las que podemos seguir trabajando.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="preguntac" value="3"> 3.	No hemos implementado medidas significativas para mejorar la eficiencia y productividad de nuestro personal en el área de producción u operaciones, lo que requiere una revisión inmediata de nuestras estrategias de gestión de personal.
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
            <p>7- ¿Cuáles son los indicadores clave de rendimiento (KPI) que utilizamos para medir el desempeño del área de producción u operaciones? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="pregunta1a" value="1"> 1. Utilizamos una amplia variedad de KPIs específicos y medibles que abarcan todos los aspectos del área de producción u operaciones, y estos nos proporcionan una visión completa y en tiempo real de su desempeño.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="preguntab" value="2"> 2. Utilizamos algunos KPIs para medir el desempeño del área de producción u operaciones, pero hay oportunidades para ampliar y mejorar nuestra medición.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="preguntac" value="3"> 3. No utilizamos KPIs para medir el desempeño del área de producción u operaciones, lo que requiere una revisión urgente de nuestras prácticas de medición.
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
            <p>8- ¿Hemos implementado prácticas de gestión de calidad y mejora continua en el área de producción u operaciones? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="pregunta8a" value="1"> 1. Hemos implementado prácticas de gestión de calidad y mejora continua de manera integral en el área de producción u operaciones, lo que ha resultado en un alto nivel de eficiencia y calidad en nuestros procesos.
          </label>
          </div>
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="preguntab" value="2"> 2. Hemos implementado algunas prácticas de gestión de calidad y mejora continua en el área de producción u operaciones, pero aún hay áreas donde podemos fortalecer estas iniciativas.
          </label>
          </div>
          <div class="col-md-6"></div>

          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="preguntab" value="2"> 3. No hemos implementado prácticas significativas de gestión de calidad y mejora continua en el área de producción u operaciones, lo que requiere una atención inmediata para mejorar nuestros procesos.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--Pregunta 9-->

        <section class="row">
          <div class="col-md-6">
            <p>9- ¿Cómo hemos mejorado la seguridad y salud laboral en el área de producción u operaciones? </p>
          </div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="pregunta9a" value="1"> 1. Hemos implementado medidas exhaustivas que han llevado a una mejora significativa en la seguridad y salud laboral en el área de producción u operaciones, y hemos alcanzado estándares de seguridad excepcionales.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="preguntab" value="2"> 2. Hemos realizado mejoras en la seguridad y salud laboral en el área de producción u operaciones, pero aún hay áreas en las que podemos fortalecer nuestras prácticas.
          </label>
          </div>

          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="preguntac" value="3"> 3. No hemos realizado mejoras significativas en la seguridad y salud laboral en el área de producción u operaciones, lo que requiere una atención urgente para garantizar la seguridad de nuestros empleados.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--  PREGUNTA 10  -->

      <section class="row">
        <div class="col-md-6">
          <p>10- ¿Qué acciones hemos tomado para reducir el impacto ambiental de nuestras operaciones de producción? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="pregunta10a" value="1"> 1.	Hemos implementado una amplia gama de acciones que han reducido significativamente el impacto ambiental de nuestras operaciones de producción, cumpliendo con altos estándares de sostenibilidad.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="preguntab" value="2"> 2. Hemos tomado algunas acciones para reducir el impacto ambiental de nuestras operaciones de producción, pero aún hay margen para mejorar y alcanzar mayores niveles de sostenibilidad.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="preguntac" value="3"> 3. No hemos tomado acciones significativas para reducir el impacto ambiental de nuestras operaciones de producción, lo que requiere una revisión urgente de nuestras prácticas para cumplir con las normativas ambientales.
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
              $sqlSurvey = "UPDATE surveys SET s5 = $sumaRespuestas where id = $idSesion";

              if ($conn->query($sqlSurvey) === TRUE) {
                  echo "La encuesta se ha insertado correctamente en la tabla 'Surveys'.";
                  echo "<script>window.location.href = 'Survey6.php';</script>";
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
          <a href="Survey6.php"><button type="submit" name="submit" class="btn btn-info" id="saveForm" value="holis">Continuar</button></a>
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