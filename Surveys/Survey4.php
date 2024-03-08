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
    <title>TALENTO HUMANO </title>

</head>
<body>
<div class="containerP">
    <br />
    <div class="container">
      <section class="row">
          <!--encabezado-->
        <div class="col-md-12">
          <h1 class="text-center">CUESTIONARO DESARROLLO DEL AREA DE TALENTO HUMANO </h1>
          <br>
          <br>    
        </div>
      </section>

      <!--  Servicios  -->
      <hr>
      <section class="row">
        <div class="col-md-12">
          <h3>Talento Humano.</h3>
          <p></p>
        </div>
      </section>  
      <hr>
      
      <!--  PREGUNTA 1  -->
      <form method="post">
      <section class="row">
        <div class="col-md-6">
          <p>1- ¿Cuál es el nivel de participación de Recursos Humanos en la toma de decisiones estratégicas de la empresa? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta1" id="pregunta1a" value="1"> 1. Recursos Humanos desempeña un papel fundamental en la toma de decisiones estratégicas de la empresa. Sus aportes y recomendaciones se consideran de alto valor y se integran activamente en el proceso de toma de decisiones.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
            <input type="radio" name="pregunta1" id="preguntab" value="2"> 2. Recursos Humanos tiene cierta participación en la toma de decisiones estratégicas de la empresa. Sus contribuciones se consideran importantes en algunas áreas, pero no están plenamente integradas en todas las decisiones
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta1" id="preguntac" value="3"> 3.	Recursos Humanos tiene una participación limitada en la toma de decisiones estratégicas de la empresa. Su influencia es mínima, y sus aportes rara vez se consideran en el proceso de toma de decisiones.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>
      
      <!--  PREGUNTA 2  -->

      <section class="row">
        <div class="col-md-6">
          <p>2- ¿Existe un plan estratégico de recursos humanos alineado con los objetivos y metas de la organización? </p>
 </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="pregunta2a" value="1"> 1. Sí, la organización cuenta con un plan estratégico de recursos humanos perfectamente alineado con los objetivos y metas. Este plan se actualiza regularmente y se considera esencial para el éxito de la empresa.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="preguntab" value="2"> 2.	Sí, existe un plan estratégico de recursos humanos que está en cierta medida alineado con los objetivos y metas de la organización. Sin embargo, puede haber áreas donde se requiere una mayor alineación o actualización.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta2" id="preguntac" value="3"> 3.	No, actualmente no existe un plan estratégico de recursos humanos claramente alineado con los objetivos y metas de la organización, o dicho plan es inexistente o poco efectivo.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>

      <!--  PREGUNTA 3  -->

      <section class="row">
        <div class="col-md-6">
          <p> 3- ¿Qué medidas se han implementado para mejorar la retención de talento en la empresa? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="pregunta3a" value="1"> 1. Se han implementado una variedad de medidas altamente efectivas para mejorar la retención de talento. Esto incluye programas de desarrollo profesional, beneficios competitivos, reconocimiento y oportunidades de crecimiento que han demostrado retener a los empleados de manera significativa.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="preguntab" value="2"> 2.	Se han implementado algunas medidas para mejorar la retención de talento en la empresa. Aunque han tenido un impacto positivo en algunos casos, es posible que se necesiten más esfuerzos 
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta3" id="preguntac" value="3"> 3.	Hasta el momento, se han implementado medidas limitadas o ninguna medida específica para mejorar la retención de talento en la empresa. Esto podría estar afectando la retención de empleados de manera significativa.
        </label>
        </div>
      </section>
      <br>
      <hr>
      <br>
      
      <!--  PREGUNTA 4  -->

      <section class="row">
          <div class="col-md-6">
            <p>4- ¿Se lleva a cabo una evaluación formal del desempeño de los empleados de manera regular? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="pregunta1a" value="1"> 1. Sí, realizamos evaluaciones formales de desempeño regularmente y las utilizamos para tomar decisiones clave de desarrollo y reconocimiento.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="preguntab" value="2"> 2. En ciertas ocasiones, realizamos evaluaciones formales del desempeño, pero no de manera regular ni de manera consistente.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta4" id="preguntac" value="3"> 3. No realizamos evaluaciones formales del desempeño de manera regular, o nunca las llevamos a cabo en nuestra empresa.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--Pregunta 5-->

        <section class="row">
          <div class="col-md-6">
            <p>5- ¿Cuál es el nivel de satisfacción de los empleados en temas de comunicación interna y clima laboral? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="pregunta5a" value="1"> 1. Nuestros empleados están altamente satisfechos con la comunicación interna y el clima laboral, y consideran que son excelentes aspectos de nuestra empresa.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="preguntab" value="2"> 2. Los empleados muestran un nivel de satisfacción razonable en cuanto a comunicación interna y clima laboral, pero hay margen para mejoras.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta5" id="preguntac" value="3"> 3. El nivel de satisfacción de los empleados en temas de comunicación interna y clima laboral es insatisfactorio, y necesitamos tomar medidas significativas para mejorar estos aspectos.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--  PREGUNTA 6  -->

      <section class="row">
        <div class="col-md-6">
          <p> 6- ¿Qué acciones se han implementado para promover la diversidad e inclusión en la organización? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="pregunta1a" value="1"> 1. Hemos implementado una amplia gama de iniciativas de diversidad e inclusión, incluyendo programas de capacitación, políticas inclusivas, grupos de afinidad y una cultura de inclusión sólida.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="preguntab" value="2"> 2.	Hemos tomado algunas medidas para promover la diversidad e inclusión, como capacitación ocasional y políticas básicas, pero aún hay margen para mejoras significativas.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta6" id="preguntac" value="3"> 3.	No hemos tomado medidas significativas para promover la diversidad e inclusión en nuestra organización, y es un área en la que necesitamos tomar acciones urgentes.
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
            <p>7- ¿Se han realizado esfuerzos para mejorar el proceso de reclutamiento y selección de personal?
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="pregunta1a" value="1"> 1. Hemos implementado mejoras significativas en nuestro proceso de reclutamiento y selección, como la adopción de tecnología avanzada y la optimización de nuestras prácticas para atraer y retener talento de alta calidad.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="preguntab" value="2"> 2. Hemos realizado algunas mejoras en el proceso de reclutamiento y selección, pero aún hay áreas donde podemos hacer más mejoras para garantizar una selección más efectiva de personal.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta7" id="preguntac" value="3"> 3. No hemos realizado esfuerzos significativos para mejorar el proceso de reclutamiento y selección, y es necesario tomar medidas urgentes para hacerlo.
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
            <p>8- ¿Existe un plan de capacitación y desarrollo para los empleados de la organización? </p>
          </div>
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="pregunta8a" value="1"> 1. Sí, contamos con un plan de capacitación y desarrollo integral que abarca a todos los empleados y se actualiza regularmente para promover su crecimiento profesional y personal.
          </label>
          </div>
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="preguntab" value="2"> 2. Tenemos algunos programas de capacitación y desarrollo, pero no son exhaustivos ni se actualizan con regularidad.
          </label>
          </div>
          <div class="col-md-6"></div>

          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta8" id="preguntab" value="2"> 3. No tenemos un plan estructurado de capacitación y desarrollo para nuestros empleados, lo que requiere una atención inmediata.
          </label>
          </div>
        </section>
        <br>
        <hr>
        <br>

        <!--Pregunta 9-->

        <section class="row">
          <div class="col-md-6">
            <p>9- ¿Qué medidas se han tomado para promover el equilibrio entre trabajo y vida personal de los empleados? </p>
          </div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="pregunta9a" value="1"> 1. Hemos implementado una amplia gama de medidas que incluyen flexibilidad de horarios, programas de bienestar y apoyo para cuidado de hijos/dependientes, lo que permite a nuestros empleados lograr un equilibrio óptimo entre trabajo y vida personal.
          </label>
          </div>
    
          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="preguntab" value="2"> 2. Hemos tomado algunas medidas para promover el equilibrio entre trabajo y vida personal, como horarios flexibles en ciertas situaciones, pero aún hay espacio para mejoras y expansión de estas iniciativas.
          </label>
          </div>

          <div class="col-md-6"></div>
    
          <div class="col-md-6">
            <label class="radio">
            <br>
            <input type="radio" name="pregunta9" id="preguntac" value="3"> 3. No hemos tomado medidas significativas para promover el equilibrio entre trabajo y vida personal de nuestros empleados, y es necesario hacerlo para mejorar la calidad de vida en la organización.
          </label>
          </div>

          <div class="col-md-6"></div>
        </section>
        <br>
        <hr>
        <br>

        <!--  PREGUNTA 10  -->

      <section class="row">
        <div class="col-md-6">
          <p>10- ¿Cómo se mide el impacto de las acciones de Recursos Humanos en el rendimiento global de la empresa? </p>
        </div>
        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="pregunta10a" value="1"> 1. Medimos el impacto de las acciones de Recursos Humanos de manera exhaustiva y cuantitativa, utilizando KPIs específicos y realizando análisis de datos para evaluar su influencia directa en el rendimiento global de la empresa.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="preguntab" value="2"> 2. Realizamos algunas mediciones del impacto de las acciones de Recursos Humanos, pero no de manera completa ni sistemática, y hay margen para mejorar nuestra evaluación.
        </label>
        </div>

        <div class="col-md-6"></div>

        <div class="col-md-6">
          <label class="radio">
          <br>
          <input type="radio" name="pregunta10" id="preguntac" value="3"> 3. No medimos el impacto de las acciones de Recursos Humanos en el rendimiento global de la empresa, lo que requiere una atención urgente para comprender y mejorar esta relación.
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
              $sqlSurvey = "UPDATE surveys SET s4 = $sumaRespuestas where id = $idSesion";

              if ($conn->query($sqlSurvey) === TRUE) {
                  echo "La encuesta se ha insertado correctamente en la tabla 'Surveys'.";
                  echo "<script>window.location.href = 'Survey5.php';</script>";
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
          <a href="Survey5.php"><button type="submit" name="submit" class="btn btn-info" id="saveForm" value="holis">Continuar</button></a>
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