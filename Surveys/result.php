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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/result.css">
    <link rel="shortcut icon" href="../Icons/logo.png" type="image/ico" />
    <title>Resultados</title>
</head>
<body>
    <div class="container2">
        <!-- Mostrar el resultado total -->
        <?php
            // Consulta SQL para obtener la suma de las columnas s1, s2, etc.
            $sql = "SELECT SUM((s1 + s2 + s3 + s4 + s5 + s6 + s7)/7) AS total FROM Surveys";

            // Ejecutar la consulta
            $resultado = $conn->query($sql);

            // Verificar si la consulta se ejecutó correctamente
            if ($resultado) {
                // Obtener el resultado de la consulta
                $fila = $resultado->fetch_assoc();
                $total = $fila['total'];

                // Mostrar el resultado
            } else {
                // Si hubo un error en la consulta, mostrar un mensaje de error
                echo "Error al ejecutar la consulta: " . $conn->error;
            }

            // Cerrar la conexión
            $conn->close();

            if ($total<=4 && $total >= 1){
                echo"<h1>Bajo desempeño</h1> <h2>$total</h2>";
                echo"<p>Lamentablemente, hemos identificado que está enfrentando un bajo desempeño en varios aspectos clave del negocio. <br><br>
                Durante el análisis, hemos encontrado los siguientes problemas que han contribuido a esta situación: <br><br>
                <b>Falta de claridad en los objetivos:</b> Hemos observado que los objetivos no están siendo comunicados de manera efectiva a todos los miembros del equipo. Como resultado, no todos están alineados con las metas de la empresa y esto afecta el rendimiento general.<br><br>
                <b>Comunicación deficiente:</b> La falta de comunicación interna está obstaculizando la eficiencia y productividad. No se está compartiendo información importante o brindando retroalimentación de manera adecuada, lo que limita el trabajo en equipo y la colaboración.<br><br>
                <b>Inadecuada gestión del tiempo:</b> Los muchos miembros del equipo están luchando por administrar su tiempo de manera eficiente. Esto ha llevado a retrasos en los proyectos y una producción más lenta de lo esperado.<br><br>
                <b>Falta de capacitación y desarrollo profesional:</b> Se detecto una falta de inversión en la mejora de habilidades y conocimientos del personal. Esto ha afectado negativamente las competencia y ha a la empresa dejado rezagados en la industria.<br><br>
                </p>";
            } else if($total<=7 && $total >= 5){
                echo"<h1>Medio desempeño</h1> <h2>$total</h2>";
                echo"<p>Nuestro diagnóstico empresarial para su desempeño medio. A continuación, se presenta un resumen de los hallazgos clave: 
                <br><br> <b>Estructura organizativa:</b> Hemos identificado que la estructura organizativa actual es efectiva para las operaciones diarias, pero existe una falta de claridad en las responsabilidades y la comunicación interna. Recomendamos revisar y optimizar la estructura para mejorar la eficiencia y evitar la duplicación de tareas. 
                <br><br><b>Procesos y operaciones:</b> Se observó que los procesos y operaciones son en su mayoría eficientes y bien diseñados. Sin embargo, existen áreas donde se pueden implementar mejoras para reducir los tiempos de respuesta y el desperdicio de recursos. Sugerimos enfocarse en la automatización de tareas rutinarias y la capacitación del personal para agilizar los procesos. 
                <br><br><b>Recursos humanos:</b> Nuestro análisis revela que el equipo de colaboradores tiene un desempeño medio en términos de productividad y motivación. Recomendamos implementar programas de formación y desarrollo profesional para mejorar las habilidades y competencias del personal. Además, es necesario establecer un sistema de evaluación de desempeño para reconocer y recompensar a aquellos empleados que se destaquen. 
                <br><br><b>Finanzas y control:</b> A nivel financiero, hemos detectado una gestión adecuada, aunque se sugiere una mayor atención a la gestión de costos y presupuestos. Recomendamos realizar un análisis más detallado de los gastos operativos y buscar oportunidades de reducción de costos para mejorar la rentabilidad. 
                <br><br><b>Marketing y ventas:</b> Si bien la empresa cuenta con estrategias de marketing y ventas, es importante aprovechar nuevas oportunidades para alcanzar un mayor número de clientes. Recomendamos invertir en marketing digital y en la creación de alianzas estratégicas para expandir el alcance de la empresa y aumentar su cuota de mercado. 
                <br><br>En resumen, si bien nuestra evaluación muestra que la empresa cuenta con un desempeño medio, hay áreas específicas que pueden mejorarse para optimizar los resultados. Estas recomendaciones están diseñadas para ayudar a la empresa a superar las barreras actuales y alcanzar su pleno potencial. 
                </p>";
            } else if($total<=10 && $total >= 8){
                echo"<h1>Buen desempeño</h1> <h2>$total</h2>";
                echo"<p>Nos complace informarles que, tras realizar exhaustivos análisis y evaluaciones, hemos concluido el proceso de diagnóstico empresarial con el objetivo de evaluar y mejorar nuestro desempeño organizacional. A continuación, les presentamos un resumen de los principales hallazgos y recomendaciones: </p>
                    
                    <ol>
                        <li>Cultura Organizacional: Se destaca la existencia de un ambiente laboral amigable y colaborativo, lo cual favorece la motivación y el compromiso de los colaboradores.
                        Se sugiere promover la comunicación efectiva, fomentar la participación y fortalecer los valores organizacionales para reforzar la identidad corporativa.</li>
                        <br><li>Gestión del Talento:  Se evidencia la presencia de un equipo talentoso y capacitado. Se recomienda implementar planes de desarrollo y capacitación continua para fortalecer las habilidades y capacidades de los colaboradores, así como establecer un programa de reconocimiento y retención del talento.</li>
                        <br><li>Estructura Organizacional: Se ha identificado una estructura clara y funcional, lo cual facilita la gestión de los procesos y la toma de decisiones. Se sugiere evaluar constantemente la eficiencia y eficacia de la estructura organizacional para adaptarla a las necesidades cambiantes del mercado.</li>
                        <br><li>Procesos y Operaciones: Se destaca la efectividad y eficiencia en los procesos operativos y administrativos.</li>
                        <br><li>Se recomienda implementar herramientas tecnológicas para automatizar y optimizar los procesos, así como establecer indicadores clave de desempeño para medir la eficacia de las operaciones.</li>
                        <br><li>Gestión Financiera: Se evidencia una gestión financiera sólida y un control adecuado de los recursos económicos. Se sugiere realizar una revisión periódica de la estructura de costos y gastos, así como establecer estrategias de control presupuestario para maximizar la rentabilidad de la empresa.</li>
                    </ol>
                    
                    <p>Estas recomendaciones permitirán fortalecer el desempeño y alcanzar los objetivos planteados.</p>
                    ";
            }

            ?>
        <section class="row">
        <div class="col-md-12">
          <a href="../core/logout.php"><button type="button" name="destroy" class="btn btn-info" id="saveForm" value="holis">Continuar</button></a>
        </div>
      </section>
    </div>
</body>
<script src="js/main.js"></script>
</html>