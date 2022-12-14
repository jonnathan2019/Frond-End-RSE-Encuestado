<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About.</title>
    <link rel="icon" type="image/png" href="../imagenes/logo_3.png" />
    <link rel="stylesheet" href="../css/about.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">


    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <!--LETRA-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;1,400&display=swap"
        rel="stylesheet">

    <!-- Loader -->
    <link rel="stylesheet" href="../css/loader.css">

</head>

<body class="cuerpo">
    <!-- <div class="loader-centrado" id="onload">
        <div class="lds-roller">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->
    <input type="checkbox" id="check">
    <!--NAV-->
    <div class="nav">
        <label class="logo">
            <img src="../imagenes/logo_3.png" alt="">
            <span>Responsabilidad Empresarial.</span>
        </label>
        <ul>
            <li class="salir" onclick="menuToggle();"><a class="far fa-user" href="#"></a></li>
            <div class="menu-salir">
                <div class="info-user">
                    <div class="logo-user">
                        <a class="far fa-user"></a>
                    </div>
                    <div class="datos-usuario">
                        <div class="nombre-user">
                            <span>Jonnthan</span>
                        </div>
                        <div class="correo-user">
                            <span>jonthancuvi@gameil.com</span>
                        </div>
                    </div>
                </div>
                <ul>
                    <li onclick="ir_perfil();"><i class="far fa-user-circle"></i></i>
                        <a>Mi Perfil</a>
                    </li>
                    <li onclick="configuracion_empresa();"><i class="fas fa-building"></i></i>
                        <a>Mi Empresa</a>
                    </li>
                    <!-- <i class="fa-regular fa-comment-question"></i> -->
                    <li onclick="ir_contactanos();"><i class="fas fa-question"></i></i>
                        <a>Ayuda</a>
                    </li>
                    <!--<li><i class="fas fa-edit"></i><a href="#">Editar Perfil</a></li>-->
                    <li><i class="fas fa-sign-out-alt"></i><a onclick="salir()">Salir</a>
                    </li>
                </ul>
            </div>
        </ul>
    </div>
    <!--sidebar start-->
    <div class="sidebar">
        <label for="check" class="check1">
            <i class="fas fa-bars" id="sidebar_btn"></i>
            <!--<span>RSE Epresarial</span>-->
        </label>
        <div class="slider-encabesado">
            R S E
        </div>
        <a class="slider-opcion" onclick="ir_evaluacion();">
            <div class="slider-text">
                <i class="fas fa-poll-h"></i>
                <span>Evaluaci??n</span>
                <div class="texto-emergente">
                    Evaluaci??n
                </div>
            </div>
        </a>
        <a class="slider-opcion" onclick="ir_dashboard();">
            <div class="slider-text">
                <i class="fas fa-chart-line"></i>
                <span>Dashboard</span>
                <div class="texto-emergente">
                    Dashboard
                </div>
            </div>
        </a>
        <a class="slider-opcion" onclick="ir_reporte();">
            <div class="slider-text">
                <i class="far fa-file-alt"></i>
                <span>Reporte</span>
                <div class="texto-emergente">
                    Reporte
                </div>
            </div>
        </a>
        <!-- <a class="slider-opcion" onclick="configuracion_empresa();">
            <div class="slider-text">
                <i class="fas fa-building"></i>
                <span>Empresa</span>
                <div class="texto-emergente">
                    Empresa
                </div>
            </div>
        </a> -->
        <a class="slider-opcion active" onclick="ir_about();">
            <div class="slider-text">
                <i class="fas fa-info-circle"></i>
                <span>About</span>
                <div class="texto-emergente">
                    About
                </div>
            </div>
        </a>
        <a class="slider-opcion sallir-option" onclick="salir();">
            <div class="slider-text">
                <i class="fas fa-sign-out-alt"></i>
                <span>Salir</span>
                <div class="texto-emergente">
                    Salir
                </div>
            </div>
        </a>
    </div>

    <!--sidebar end-->

    <!--contenido-->
    <div class="content">
        <div class="contendor-info-general" style="display: block;">
            <div class="contendor-info">
                <div class="caja-texto">
                    <h1>Evalu?? su nivel de Integraci??n.</h1>
                    <p>Evalu?? el desempe??o de su empresa frente
                        a practicas de RSE. Realizar esta evaluaci??n
                        ser?? un enriquecedor para su empresa.
                    </p>
                </div>
            </div>
        </div>
        <div class="contendor-info-general" style="display: none;">
            <div class="contendor-info_2">
                <div class="caja-texto">
                    <h1>Consulte su nivel de Integraci??n.</h1>
                    <p>Revise su reporte sobre el nivel de integraci??n de practicas de RSE y
                        vea como se comporta su empresa frente a conceptos de RSE.
                    </p>
                </div>
            </div>
        </div>
        <div class="nav-abaut-info">
            <div class="about-evaluacion about-repoter-info active">
                <span>Evaluaci??n.</span>
            </div>
            <div class="about-reporte about-repoter-info">
                <span>Reporte.</span>
            </div>
        </div>
        <div class="contenido-about" style="display: block;">
            <div class="whta-evaluation">
                <!-- titulo -->
                <div class="que-evaluamos">
                    <div class="titulo-cabecera">
                        <span>Que evaluamos.</span>
                    </div>
                </div>
                <!-- dimensiones -->
                <div class="info-dimentions">
                    <div class="titulo">
                        <span>Dimensiones.</span>
                        <!-- <p>se evalua lo que se va jhacer y no se que ma poner </p> -->
                    </div>
                    <!-- cards-dimensiones -->
                    <div class="dimensiones-info">
                        <div class="cards-dimensiones car-social">
                            <div class="card-contenido">
                                <h2 class="card-titulo">Social</h2>
                                <p class="card-cuerpo">
                                    La Responsabilidad Social incluye temas relacionados con el personal
                                    trabajador de la organizaci??n, con la mejora de la calidad de vida de la ciudadan??a,
                                    creando
                                    oportunidades para los colectivos con especiales dificultades.
                                </p>
                            </div>
                        </div>
                        <div class="cards-dimensiones card-ambiental">
                            <div class="card-contenido">
                                <h2 class="card-titulo">Ambiental</h2>
                                <p class="card-cuerpo">
                                    La Responsabilidad Social Ambiental se puede entender como el conjunto de mecanismos
                                    aplicados por las empresas,
                                    para minimizar su impacto al medio ambiente, contribuyendo as?? a mejorar
                                    la calidad de vida de la empresa y de sus alrededores.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- temas de RSE -->
                <div class="info-temas">
                    <div class="titulo">
                        <span>Temas.</span>
                        <!-- <p>
                            Se evaluan aspectos relacionados con personas que no se que mas decir
                        </p> -->
                    </div>
                    <div class="container-temas">
                        <div class="a-box">
                            <div class="img-container">
                                <div class="img-inner">
                                    <div class="inner-skew">
                                        <!-- let nom_imagenes = ['tema_practicas_trabajo_2.jpg', 'tema_derechos_humanos_2.png', 'tema_comunidad_desarrollo_2.jpg', 'tema_cuestiones_relacionadas_consumidor_2.jpg', 'medio_ambiente.jpg']; -->

                                        <img src="../imagenes/tema_derechos_humanos_2.png">
                                    </div>
                                </div>
                            </div>
                            <div class="text-container">
                                <h3>Derechos Humanos</h3>
                                <div>
                                    Dimensi??n social.
                                </div>
                            </div>
                        </div>
                        <div class="a-box">
                            <div class="img-container">
                                <div class="img-inner">
                                    <div class="inner-skew">
                                        <img src="../imagenes/tema_cuestiones_relacionadas_consumidor_2.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="text-container">
                                <h3>Cuestiones Relativas al Consumidor</h3>
                                <div>
                                    Dimensi??n social.
                                </div>
                            </div>
                        </div>
                        <div class="a-box">
                            <div class="img-container">
                                <div class="img-inner">
                                    <div class="inner-skew">
                                        <img src="../imagenes/tema_practicas_trabajo_2.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="text-container">
                                <h3>Pr??cticas de Trabajo</h3>
                                <div>
                                    Dimensi??n social.
                                </div>
                            </div>
                        </div>
                        <div class="a-box">
                            <div class="img-container">
                                <div class="img-inner">
                                    <div class="inner-skew">
                                        <img src="../imagenes/tema_cuestiones_relacionadas_consumidor_2.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="text-container">
                                <h3>Relaciones con la Comunidad y su Participaci??n en su Desarrollo</h3>
                                <div>
                                    Dimensi??n social.
                                </div>
                            </div>
                        </div>
                        <div class="a-box">
                            <div class="img-container">
                                <div class="img-inner">
                                    <div class="inner-skew">
                                        <img src="../imagenes/medio_ambiente.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="text-container">
                                <h3>Medio Ambiente</h3>
                                <div>
                                    Dimensi??n Ambiental.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- acerca del NIVEL DE INTEGRACION -->
            <!-- <div class="contenido-abput-evaluacion">
                <div class="about-evaluacion-info">
                    <div class="titulo">
                        Obtenga un nivel de integraci??n de practicas de RSE.
                    </div>
                    <div class="about-info">
                        <div class="info-1">
                            La mejor forma de mejorar en aspectos de RSE es conocer el
                            nivel de integraci??n en el que se encuentra su empresa respecto
                            a conceptos de RSE.
                        </div>
                        <div class="info-2">
                            El nivel de integraci??n es un ??ndice que tiene un rango de 0 a 100,
                            siendo 100 y valores mas cercanos a 100 los resultados mas ??ptimos
                            en cuanto a la ampliaci??n de conceptos de RSE.
                        </div>
                    </div>
                </div>
                <div class="about-evaluacion-img">
                    <img src="../imagenes/nivel_integracion.png" alt="">
                </div>
            </div> -->

            <!-- Ejemplo de Preguntas -->
            <div class="contenido-ejemplo-preguntas">
                <div class="titulo">
                    Sub-Temas y Preguntas.
                </div>
                <div class="info">
                    Todas las preguntas se encuentran calcificadas por
                    temas que a la vez est??n clasificadas por subtemas.
                    Estas preguntas tendr??n 4 tipo de opciones ???Si???,
                    ???Parcial???, ???No??? y ???No Aplica???, siendo la ???Si??? la
                    opci??n m??s optima y ???No??? la opci??n menos optima,
                    mientras que ???No Aplica??? se refiere a preguntas
                    que no se tomar??n en cuenta al obtener los resultados finales.
                </div>

                <div class="conteiner-acordion-vertical">
                    <input class="input-acordion" type="radio" id="animal" name="wiki" value="part-1" checked>
                    <input class="input-acordion" type="radio" id="plant" name="wiki" value="part-2">
                    <input class="input-acordion" type="radio" id="space" name="wiki" value="part-3">
                    <input class="input-acordion" type="radio" id="river" name="wiki" value="part-4">
                    <input class="input-acordion" type="radio" id="monatana" name="wiki" value="part-5">


                    <ul class="accordion">
                        <li data-radio="animal">
                            <label for="animal" class="accordion-title">
                                <span></span>
                                <span class="accordion-heading">Derechos Humanos</span>
                            </label>
                            <div class="accordion-content">
                                <div class="imagen-preguntas">
                                    <img src="../imagenes/preguntas-DH.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li data-radio="plant">
                            <label for="plant" class="accordion-title">
                                <span></span>
                                <span class="accordion-heading">Cuestiones Relativas al Consumidor</span>
                            </label>
                            <div class="accordion-content">
                                <div class="imagen-preguntas">
                                    <img src="../imagenes/preguntas-CRC.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li data-radio="space">
                            <label for="space" class="accordion-title">
                                <span></span>
                                <span class="accordion-heading">Pr??cticas de Trabajo</span>
                            </label>
                            <div class="accordion-content">
                                <div class="imagen-preguntas">
                                    <img src="../imagenes/preguntas-PT.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li data-radio="river">
                            <label for="river" class="accordion-title">
                                <span></span>
                                <span class="accordion-heading">Relaciones con la Comunidad</span>
                            </label>
                            <div class="accordion-content">
                                <div class="imagen-preguntas">
                                    <img src="../imagenes/preguntas-PCD.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li data-radio="monatana">
                            <label for="monatana" class="accordion-title">
                                <span></span>
                                <span class="accordion-heading">Medio Ambiente</span>
                            </label>
                            <div class="accordion-content">
                                <div class="imagen-preguntas">
                                    <img src="../imagenes/preguntas-MA.png" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- foter -->
            <div class="pie-pagina">
                <span>Copyright ?? 2022. Todos los derechos reservados.</span>
            </div>
        </div>

        <div class="contenido-about" style="display: none;">
            <div class="contenido-about-reporte">
                <div class="reporte-integracion">
                    <div class="titulo">
                        Reporte de Integraci??n.
                    </div>
                    <div class="info">
                        El reporte de Integraci??n mostrara un an??lisis
                        general de Responsabilidad Social Empresarial,
                        as?? como un an??lisis por cada una de las dimensiones,
                        temas y subtemas. Este an??lisis constara en ??ndice que
                        tiene un rango de 0 a 100 siendo cien el valor mas optimo
                        y cero el menos optimo.
                    </div>
                </div>
                <div class="about-nivel-integracion">
                    <div class="informacion_1">
                        <div class="informacion_1-titulo">
                            Puntaje General.
                        </div>
                        <div class="info">
                            El puntaje general consta de dos niveles de integraci??n.
                            ???Nivel de Integraci??n Especifico??? se refiere al total
                            de pr??cticas evaluadas, teniendo en cuenta solo
                            practicas previamente registradas. ???Nivel de Integraci??n Global???
                            se refiera a todas las practicas evaluadas ya sea que se hayan o
                            no registrado previamente.
                        </div>
                    </div>
                    <div class="informacion_2">
                        <img src="../imagenes/puntaje_general.png" alt="">
                    </div>
                </div>
                <div class="about-aspectos-evaluados">
                    <div class="informacion-aspectos-evaluados">
                        <div class="titulo">
                            Reporte de Integraci??n, aspectos evaluados.
                        </div>
                        <div class="info">
                            El reporte de integraci??n estar?? conformado
                            por un an??lisis de dimensiones, temas y subtemas,
                            que est??n clasificados de acuerdo a su nivel de
                            integraci??n. Este nivel de interacci??n tiene tres
                            rangos, Nivel de Integraci??n Alto, Nivel de
                            Integraci??n Medio y Nivel de Integraci??n Bajo,
                            siendo el nivel de integraci??n alto el m??s optimo y
                            el nivel de integraci??n bajo el menos optimo.
                        </div>
                    </div>
                    <div class="informacion-integracion">
                        <div class="aspectos">
                            <div class="aspecto active">
                                An??lisis de Temas Evaluados
                            </div>
                            <div class="aspecto-info" style="display: block;">
                                <div class="contenido-aspecto">
                                    Este an??lisis permite conocer el nivel de
                                    integraci??n de cada uno de los temas, el
                                    nivel de integraci??n esta entre un rango
                                    de 0 a 100, siendo 100 y los valores cercanos
                                    a 100 los valores m??s ??ptimos.
                                </div>
                            </div>
                            <div class="aspecto">
                                An??lisis de Subtemas Evaluados
                            </div>
                            <div class="aspecto-info" style="display: none;">
                                <div class="contenido-aspecto">
                                    En este apartado se podr?? visualizar
                                    el nivel de integraci??n de cada uno
                                    de los subtemas de cada tema.
                                </div>
                            </div>
                            <div class="aspecto">
                                An??lisis Dimensiones Evaluadas
                            </div>
                            <div class="aspecto-info" style="display: none;">
                                <div class="contenido-aspecto">
                                    Este an??lisis permite conocer el nivel
                                    de integraci??n de cada una de las
                                    dimensiones que hacen parte de RSE,
                                    as?? como una clasificaci??n de los temas
                                    de cada dimensi??n, los temas se clasifican
                                    en tres rangos, Bueno, Malo y Regular de
                                    acuerdo a su nivel de integraci??n.
                                </div>
                            </div>
                            <div class="aspecto">
                                Graficas
                            </div>
                            <div class="aspecto-info" style="display: none;">
                                <div class="contenido-aspecto">
                                    En este apartado se podr?? visualizar
                                    graficas de los diferentes temas
                                    y dimensiones evaluados. En estas
                                    graficas se observa cu??les de los
                                    diferentes aspectos de RSE predomina
                                    en su empresa.
                                </div>
                            </div>
                        </div>
                        <div class="aspectos-img">
                            <div class="info-aspecto info-aspecto-1" style="display: block;">
                                <!-- esta imagen esta en el css en "info-aspecto-1" -->
                            </div>
                            <div class="info-aspecto info-aspecto-2" style="display: none;">
                                <img src="../imagenes/subtema_inetgracion.png" alt="">
                                <img src="../imagenes/subtema_inetgracion_2.png" alt="">
                                <img src="../imagenes/subtema_inetgracion_3.png" alt="">
                            </div>
                            <div class="info-aspecto info-aspecto-3" style="display: none;">
                                <img src="../imagenes/dim_social_inetegracion.png" alt="">
                                <!-- <img src="../imagenes/dim_ambiental_inetegracion.png" alt=""> -->
                            </div>
                            <div class="info-aspecto info-aspecto-4" style="display: none;">
                                <div class="garficas_temas">
                                    <img src="../imagenes/grafica_circular.png" alt="">
                                    <img src="../imagenes/grafica_radar_2.png" alt="">
                                </div>
                                <div class="grafica-dim">
                                    <img src="../imagenes//grafica_bar_dim.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- foter -->
                <div class="pie-pagina">
                    <span>Copyright ?? 2022. Todos los derechos reservados.</span>
                </div>
            </div>

        </div>

    </div>

</body>
<script>
    function menuToggle() {
        const toggleMenu = document.querySelector('.menu-salir');
        toggleMenu.classList.toggle('active')
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../librerias/loader.js"></script>
<script src="../js/urls.js"></script>
<script src="../js/about.js"></script>

</html>