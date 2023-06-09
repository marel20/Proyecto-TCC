<?php
session_start();
            
$_SESSION['acceso']=0;

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0"
    />
    <link rel="icon" href="assets/logo/logo.png" type="logo" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/timeline.css" />
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <title>Tenis Club Correa</title>
  </head>
  <body style="background-color: rgb(207, 207, 207)">
    <div id="inicio" class="container-fluid">
      <header>
        <!--Start Navbar-->
        <nav>
          <div class="navbar">
            <a href="#inicio"
              ><img class="logo" src="assets/logo/logo.png" alt="logo_TCC"
            /></a>

            <ul>
              <li><a href="#inicio">Inicio</a></li>
              <li><a href="#institucion">Institución</a></li>
              <li><a href="#historia">Historia</a></li>
              <li><a href="#disciplinas">Disciplinas</a></li>
              <li><a href="#contacto">Contacto</a></li>
            </ul>

            <a class="ingreso" href="pages/ingreso.php">Ingresar</a>
          </div>
        </nav>

        <!--End Navbar-->

        <!--Start Sidenav-->
        <div
          id="sidenav"
          class="sidenav navbar navbar-light text-center"
          data-mdb-right="true"
        >
          <div class="imgSidenav">
            <img src="assets/logo/logo.png" alt="logo_TCC" loading="lazy" />
            <button
              id="btnHamburguer"
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#collapseWidthExample"
              aria-expanded="false"
              aria-controls="collapseWidthExample"
            >
              <i class="fas fa-bars"></i>
            </button>
          </div>
          <div
            class="side-nav collapse collapse-horizontal"
            id="collapseWidthExample"
          >
            <button
              id="btnHamburguer"
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#collapseWidthExample"
              aria-expanded="false"
              aria-controls="collapseWidthExample"
            >
              <i class="fas fa-bars"></i>
            </button>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 sidenav-menu">
              <li class="nav-li nav-item">
                <a
                  class="nav-link active"
                  id="button-hide1"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#collapseWidthExample"
                  aria-expanded="false"
                  aria-controls="collapseWidthExample"
                  >Inicio</a
                >
              </li>
              <li class="nav-li nav-item">
                <a
                  class="nav-link active"
                  id="button-hide2"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#collapseWidthExample"
                  aria-expanded="false"
                  aria-controls="collapseWidthExample"
                  >Institución</a
                >
              </li>
              <li class="nav-li nav-item">
                <a
                  class="nav-link active"
                  id="button-hide3"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#collapseWidthExample"
                  aria-expanded="false"
                  aria-controls="collapseWidthExample"
                  >Historia</a
                >
              </li>
              <li class="nav-li nav-item">
                <a
                  class="nav-link active"
                  id="button-hide4"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#collapseWidthExample"
                  aria-expanded="false"
                  aria-controls="collapseWidthExample"
                  >Disciplinas</a
                >
              </li>
              <li class="nav-li nav-item">
                <a
                  class="nav-link active"
                  id="button-hide5"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#collapseWidthExample"
                  aria-expanded="false"
                  aria-controls="collapseWidthExample"
                  >Contacto</a
                >
              </li>
            </ul>

            <a
              href="pages/ingreso.php"
              class="ingreso"
              id="button-ingresar"
              data-mdb-toggle="collapse"
              data-mdb-target="#collapseWidthExample"
              aria-expanded="false"
              aria-controls="collapseWidthExample"
              >Ingresar</a
            >
          </div>
        </div>
        <!--End Sidenav-->
      </header>
      <br />

      <div id="home" class="slides row" style="margin-top: 58px">
        <div class="imgNone col-lg-2 col-md-6 mb-4 text-center">
          <div>
            <a href="#!">
              <img src="assets/img/publi1.jpg" />
            </a>
          </div>
          <div>
            <a href="#!">
              <img src="assets/img/publi2.jpg" />
            </a>
          </div>
          <div>
            <a href="#!">
              <img src="assets/img/publi3.jpg" />
            </a>
          </div>
          <div>
            <a href="#!">
              <img src="assets/img/publi4.jpg" />
            </a>
          </div>
          <div>
            <a href="#!">
              <img src="assets/img/publi5.jpg" />
            </a>
          </div>
          <div>
            <a href="#!">
              <img src="assets/img/publi6.jpg" />
            </a>
          </div>
          <div>
            <a href="#!">
              <img src="assets/img/publi7.jpg" />
            </a>
          </div>
          <div>
            <a href="#!">
              <img src="assets/img/publi8.jpg" />
            </a>
          </div>
        </div>
        <div class="imgBlock col-lg-8 col-md-12 mb-4 col-12 text-center">
          <div
            id="carouselExampleSlidesOnly"
            class="carousel slide"
            data-mdb-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  style="height: 85vh"
                  src="assets/img/instalaciones.jpeg"
                  class="imgMobile d-block w-100"
                  alt="Wild Landscape"
                />
              </div>
              <div class="carousel-item">
                <img
                  style="height: 85vh"
                  src="assets/img/predio3.JPG"
                  class="imgMobile d-block w-100"
                  alt="Camera"
                />
              </div>
              <div class="carousel-item">
                <img
                  style="height: 85vh"
                  src="assets/img/instalacioness.png"
                  class="imgMobile d-block w-100"
                  alt="Exotic Fruits"
                />
              </div>
              <div class="carousel-item">
                <img
                  style="height: 85vh"
                  src="assets/img/predio4.jpg"
                  class="imgMobile d-block w-100"
                  alt="Exotic Fruits"
                />
              </div>
              <div class="carousel-item">
                <img
                  style="height: 85vh"
                  src="assets/img/predio6.JPG"
                  class="imgMobile d-block w-100"
                  alt="Exotic Fruits"
                />
              </div>
              <div class="carousel-item">
                <img
                  style="height: 85vh"
                  src="assets/img/predio9.JPG"
                  class="imgMobile d-block w-100"
                  alt="Exotic Fruits"
                />
              </div>
              <div class="carousel-item">
                <img
                  style="height: 85vh"
                  src="assets/img/predio10.JPG"
                  class="imgMobile d-block w-100"
                  alt="Exotic Fruits"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="imgNone col-lg-2 col-md-6 mb-4 text-center">
          <div>
            <a href="#!">
              <img src="assets/img/publi9.jpg" />
            </a>
          </div>
          <div>
            <a href="#!">
              <img src="assets/img/publi10.jpg" />
            </a>
          </div>
          <div>
            <a href="#!">
              <img src="assets/img/publi11.jpg" />
            </a>
          </div>
          <div>
            <a href="#!">
              <img src="assets/img/publi12.jpg" />
            </a>
          </div>
          <div>
            <a href="#!">
              <img src="assets/img/publi13.jpg" />
            </a>
          </div>
          <div>
            <a href="#!">
              <img src="assets/img/publi14.jpg" />
            </a>
          </div>
          <div>
            <a href="#!">
              <img src="assets/img/publi15.jpg" />
            </a>
          </div>
        </div>
      </div>

      <div class="banner">
        <div class="card col-3">
          <a href="#"><img src="assets/img/publi1.jpg" alt="publicidad" /></a>
        </div>
        <div class="card col-3">
          <a href="#"><img src="assets/img/publi2.jpg" alt="publicidad" /></a>
        </div>
        <div class="card col-3">
          <a href="#"><img src="assets/img/publi3.jpg" alt="publicidad" /></a>
        </div>
        <div class="card col-3">
          <a href="#"><img src="assets/img/publi4.jpg" alt="publicidad" /></a>
        </div>
      </div>

      <div id="institucion"></div>

      <div class="institucion">
        <div class="row" style="margin: 0 auto">
          <div class="col-lg-7 col-md-12 mb-12">
            <p>
              Tenis Club Correa es una institución que hoy alberga mas de 1.900
              socios, alrededor de 600 deportistas y aproximadamente 15
              profesores. Personas desarrollando tareas administrativas y de
              mantenimiento, y un sinfín de colaboradores en cada disciplina.
            </p>
            <br />
            <p>
              Estamos viviendo momentos de mucha alegría con mejoras diarias en
              nuestras instalaciones, enfocados en perfeccionar día a día las
              disciplinas deportivas que se practican en nuestro club.
            </p>
            <br />
            <p>
              Creemos también que nuestra tarea no solo se centra en el ambiente
              deportivo, sino también en brindar un espacio humano y fraternal
              para todos nuestros socios y la comunidad, ayudando así al
              desarrollo social.
            </p>
          </div>
          <div class="iframe col-lg-4 col-md-12 mb-12">
            <a
              class="twitter-timeline"
              href="https://twitter.com/teniscorrea?ref_src=twsrc%5Etfw"
              width="400"
              height="450"
              scrolling="yes"
              frameborder="0"
              allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
              >Noticias Tenis Club Correa</a
            >
            <script
              async
              src="https://platform.twitter.com/widgets.js"
              charset="utf-8"
            ></script>
          </div>
        </div>
      </div>

      <div class="banner">
        <div class="card col-3">
          <a href="#"><img src="assets/img/publi5.jpg" alt="publicidad" /></a>
        </div>
        <div class="card col-3">
          <a href="#"><img src="assets/img/publi6.jpg" alt="publicidad" /></a>
        </div>
        <div class="card col-3">
          <a href="#"><img src="assets/img/publi7.jpg" alt="publicidad" /></a>
        </div>
        <div class="card col-3">
          <a href="#"><img src="assets/img/publi8.jpg" alt="publicidad" /></a>
        </div>
      </div>

      <div id="historia"></div>

      <div class="historia">
        <div class="container-fluid">
          <div class="row">
            <div id="timeline">
              <div class="row timeline-movement timeline-movement-top">
                <div
                  class="timeline-badge timeline-future-movement text-center"
                >
                  <img src="assets/logo/logo.png" alt="" />
                </div>
              </div>
              <div class="row timeline-movement">
                <div class="col-lg-6 col-md-6 mb-4 col-12 timeline-item">
                  <div class="row">
                    <div class="col-sm-11">
                      <div
                        class="timeline-panel credits anim animate fadeInLeft"
                      >
                        <ul class="timeline-panel-ul">
                          <div class="lefting-wrap">
                            <li class="img-wraping">
                              <a href="#"
                                ><img
                                  src="assets/img/lawnTenis.jpeg"
                                  class="img-responsive"
                                  alt="user-image"
                              /></a>
                            </li>
                          </div>
                          <div class="righting-wrap">
                            <li class="importo text-center">
                              Inicios: El Lawn Tennis Club
                            </li>
                            <li>
                              <span class="causale" style="color: #000"
                                >Primera fundación bajo el nombre de Lawn Tennis
                                Club.</span
                              >
                            </li>
                            <li>
                              <p class="fecha" style="color: #000">
                                <i class="glyphicon glyphicon-time"></i>1940
                              </p>
                            </li>
                          </div>
                          <div class="clear"></div>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row timeline-movement">
                <div
                  class="offset-sm-6 col-lg-6 col-md-6 mb-4 col-12 timeline-item"
                >
                  <div class="row">
                    <div class="offset-sm-1 col-sm-11">
                      <div
                        class="timeline-panel debits anim animate fadeInRight"
                      >
                        <ul class="timeline-panel-ul">
                          <div class="lefting-wrap">
                            <li class="img-wraping">
                              <a href="#"
                                ><img
                                  src="assets/img/tccRefundacion.jpeg"
                                  class="img-responsive"
                                  alt="user-image"
                              /></a>
                            </li>
                          </div>
                          <div class="righting-wrap">
                            <li class="importo text-center">
                              Refundación y crecimiento: Tenis Club Correa
                            </li>
                            <li>
                              <span class="causale" style="color: #000"
                                >Compra del nuevo predio y traslado de la sede
                                al actual lugar. Ruta Nac nº 9.
                              </span>
                            </li>
                            <li>
                              <p class="fecha" style="color: #000">
                                <i class="glyphicon glyphicon-time"></i>1962
                              </p>
                            </li>
                          </div>
                          <div class="clear"></div>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row timeline-movement">
                <div class="col-lg-6 col-md-6 mb-4 col-12 timeline-item">
                  <div class="row">
                    <div class="col-sm-11">
                      <div
                        class="timeline-panel credits anim animate fadeInLeft"
                      >
                        <ul class="timeline-panel-ul">
                          <div class="lefting-wrap">
                            <li class="img-wraping">
                              <a href="#"
                                ><img
                                  src="assets/img/natatorioVerano.jpeg"
                                  class="img-responsive"
                                  alt="user-image"
                              /></a>
                            </li>
                          </div>
                          <div class="righting-wrap">
                            <li class="importo text-center">
                              Ampliación: Natatorio de verano
                            </li>
                            <li>
                              <span class="causale" style="color: #000"
                                >Se inaugura el primer natatorio en Correa.
                              </span>
                            </li>
                            <li>
                              <p class="fecha" style="color: #000">
                                <i class="glyphicon glyphicon-time"></i>1966
                              </p>
                            </li>
                          </div>
                          <div class="clear"></div>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row timeline-movement">
                <div
                  class="offset-sm-6 col-lg-6 col-md-6 mb-4 col-12 timeline-item"
                >
                  <div class="row">
                    <div class="offset-sm-1 col-sm-11">
                      <div
                        class="timeline-panel debits anim animate fadeInRight"
                      >
                        <ul class="timeline-panel-ul">
                          <div class="lefting-wrap">
                            <li class="img-wraping">
                              <a href="#"
                                ><img
                                  src="assets/img/ampliacionPredio.jpeg"
                                  class="img-responsive"
                                  alt="user-image"
                              /></a>
                            </li>
                          </div>
                          <div class="righting-wrap">
                            <li class="importo text-center">
                              Ampliación del predio
                            </li>
                            <li>
                              <span class="causale" style="color: #000"
                                >Se equipó el buffet, se añadieron parrilleros y
                                mesas, y se construyó la cancha de volley.</span
                              >
                            </li>
                            <li>
                              <p class="fecha" style="color: #000">
                                <i class="glyphicon glyphicon-time"></i>1983
                              </p>
                            </li>
                          </div>
                          <div class="clear"></div>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row timeline-movement">
                <div class="col-lg-6 col-md-6 mb-4 col-12 timeline-item">
                  <div class="row">
                    <div class="col-sm-11">
                      <div
                        class="timeline-panel credits anim animate fadeInLeft"
                      >
                        <ul class="timeline-panel-ul">
                          <div class="lefting-wrap">
                            <li class="img-wraping">
                              <a href="#"
                                ><img
                                  src="assets/img/canchaPaddle.jpeg"
                                  class="img-responsive"
                                  alt="user-image"
                              /></a>
                            </li>
                          </div>
                          <div class="righting-wrap">
                            <li class="importo text-center">
                              Ampliación: Gimnasio cubierto y cancha de paddle
                            </li>
                            <li>
                              <span class="causale" style="color: #000"
                                >Se dan por finalizadas ambas obras, donde se
                                procede a una inauguración.
                              </span>
                            </li>
                            <li>
                              <p class="fecha" style="color: #000">
                                <i class="glyphicon glyphicon-time"></i>1991
                              </p>
                            </li>
                          </div>
                          <div class="clear"></div>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row timeline-movement">
                <div
                  class="offset-sm-6 col-lg-6 col-md-6 mb-4 col-12 timeline-item"
                >
                  <div class="row">
                    <div class="offset-sm-1 col-sm-11">
                      <div
                        class="timeline-panel debits anim animate fadeInRight"
                      >
                        <ul class="timeline-panel-ul">
                          <div class="lefting-wrap">
                            <li class="img-wraping">
                              <a href="#"
                                ><img
                                  src="assets/img/ampliacionGimnasio.jpeg"
                                  class="img-responsive"
                                  alt="user-image"
                              /></a>
                            </li>
                          </div>
                          <div class="righting-wrap">
                            <li class="importo text-center">
                              Renovación gimnasio cubierto
                            </li>
                            <li>
                              <span class="causale" style="color: #000"
                                >Se realiza la incorporación del piso parquet al
                                gimnasio.</span
                              >
                            </li>
                            <li>
                              <p class="fecha" style="color: #000">
                                <i class="glyphicon glyphicon-time"></i>2008
                              </p>
                            </li>
                          </div>
                          <div class="clear"></div>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row timeline-movement">
                <div class="col-lg-6 col-md-6 mb-4 col-12 timeline-item">
                  <div class="row">
                    <div class="col-sm-11">
                      <div
                        class="timeline-panel credits anim animate fadeInLeft"
                      >
                        <ul class="timeline-panel-ul">
                          <div class="lefting-wrap">
                            <li class="img-wraping">
                              <a href="#"
                                ><img
                                  src="assets/img/climatizada.jpeg"
                                  class="img-responsive"
                                  alt="user-image"
                              /></a>
                            </li>
                          </div>
                          <div class="righting-wrap">
                            <li class="importo text-center">
                              Ampliación: Natatorio climatizado
                            </li>
                            <li>
                              <span class="causale" style="color: #000"
                                >Se llevo a cabo la inauguración de la obra de
                                la pileta climatizada.</span
                              >
                            </li>
                            <li>
                              <p class="fecha" style="color: #000">
                                <i class="glyphicon glyphicon-time"></i>2012
                              </p>
                            </li>
                          </div>
                          <div class="clear"></div>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row timeline-movement">
                <div
                  class="offset-sm-6 col-lg-6 col-md-6 mb-4 col-12 timeline-item"
                >
                  <div class="row">
                    <div class="offset-sm-1 col-sm-11">
                      <div
                        class="timeline-panel debits anim animate fadeInRight"
                      >
                        <ul class="timeline-panel-ul">
                          <div class="lefting-wrap">
                            <li class="img-wraping">
                              <a href="#"
                                ><img
                                  src="assets/img/baños.jpg"
                                  class="img-responsive"
                                  alt="user-image"
                              /></a>
                            </li>
                          </div>
                          <div class="righting-wrap">
                            <li class="importo text-center">
                              Ampliación: Baños y vestuarios
                            </li>
                            <li>
                              <span class="causale" style="color: #000"
                                >Se da por finalizada e inaugurada la obra de
                                nuevos baños y vestuarios.</span
                              >
                            </li>
                            <li>
                              <p class="fecha" style="color: #000">
                                <i class="glyphicon glyphicon-time"></i>2022
                              </p>
                            </li>
                          </div>
                          <div class="clear"></div>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="banner">
        <div class="card col-3">
          <a href="#"><img src="assets/img/publi9.jpg" alt="publicidad" /></a>
        </div>
        <div class="card col-3">
          <a href="#"><img src="assets/img/publi10.jpg" alt="publicidad" /></a>
        </div>
        <div class="card col-3">
          <a href="#"><img src="assets/img/publi11.jpg" alt="publicidad" /></a>
        </div>
        <div class="card col-3">
          <a href="#"><img src="assets/img/publi12.jpg" alt="publicidad" /></a>
        </div>
      </div>

      <div id="disciplinas"></div>

      <div class="disciplinas row justify-content-evenly">
        <div class="col-lg-4 col-md-4 mb-6 col-6">
          <a href="pages/tenis.html">
            <div class="cardImg">
              <img
                src="assets/img/tenis.jpg"
                class="card-img"
                alt="Stony Beach"
              />
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-4 mb-6 col-6">
          <a href="pages/basquet.html">
            <div class="cardImg">
              <img
                src="assets/img/basquet.jpg"
                class="card-img"
                alt="Stony Beach"
              />
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-4 mb-6 col-6">
          <a href="pages/voley.html">
            <div class="cardImg">
              <img
                src="assets/img/voley.jpg"
                class="card-img"
                alt="Stony Beach"
              />
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-4 mb-6 col-6">
          <a href="pages/gim.html">
            <div class="cardImg">
              <img
                src="assets/img/gym.jpg"
                class="card-img"
                alt="Stony Beach"
              />
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-4 mb-6 col-6">
          <a href="pages/patin.html">
            <div class="cardImg">
              <img
                src="assets/img/patin.jpg"
                class="card-img"
                alt="Stony Beach"
              />
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-4 mb-6 col-6">
          <a href="pages/natacion.html">
            <div class="cardImg">
              <img
                src="assets/img/natacion.jpg"
                class="card-img"
                alt="Stony Beach"
              />
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-4 mb-6 col-6">
          <a href="pages/pInterdisciplinario.html">
            <div class="cardImg">
              <img
                src="assets/img/escDeportiva.jpg"
                class="card-img"
                alt="Stony Beach"
              />
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-4 mb-6 col-6">
          <a href="pages/futFem.html">
            <div class="cardImg">
              <img
                src="assets/img/futbolFem.jpg"
                class="card-img"
                alt="Stony Beach"
              />
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-4 mb-6 col-6">
          <a href="pages/torneoAmistad.html">
            <div class="cardImg">
              <img
                src="assets/img/torneoAmistad.jpg"
                class="card-img"
                alt="Stony Beach"
              />
            </div>
          </a>
        </div>
      </div>

      <div id="whatsapp" class="visible">
        <a href="https://wa.me/5493471567877" class="btn-wsp" target="_blank">
          <i class="icon-whatsapp"></i>
          <img src="assets/icons/whatsapp.png" alt="logowsp" />
        </a>
      </div>
      <div id="wsp" class="oculto">
        <a href="https://wa.me/5493471567877" class="btn-wsp" target="_blank">
          <i class="icon-whatsapp"></i>
          <img src="assets/icons/whattsapp.png" alt="logowsp" />
        </a>
      </div>

      <div class="banner">
        <div class="card col-4">
          <a href="#"><img src="assets/img/publi13.jpg" alt="publicidad" /></a>
        </div>
        <div class="card col-4">
          <a href="#"><img src="assets/img/publi14.jpg" alt="publicidad" /></a>
        </div>
        <div class="card col-4">
          <a href="#"><img src="assets/img/publi15.jpg" alt="publicidad" /></a>
        </div>
      </div>

      <div id="contacto">
        <div class="map col-md-12 offset-lg-1 col-lg-10 card map-card mb-4">
          <div
            id="map-container-google-1"
            class="map-container"
            style="height: 250px"
          >
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7972.147598005687!2d-61.25986989505603!3d-32.848556715401685!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b626c3e14320d7%3A0xf3c9462ad1db03c3!2sTenis%20Club%20Correa!5e0!3m2!1ses!2sar!4v1651787621455!5m2!1ses!2sar"
              width="100%"
              height="250"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>

      <!--Start Footer-->
      <footer class="footer text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="https://www.facebook.com/tenisclubcorrea"
              target="_blank"
              role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>

            <!-- Twitter -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="https://twitter.com/teniscorrea"
              target="_blank"
              role="button"
              ><i class="fab fa-twitter"></i
            ></a>

            <!-- Instagram -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="https://www.instagram.com/tenisclubcorrea/"
              target="_blank"
              role="button"
              ><i class="fab fa-instagram"></i
            ></a>

            <!-- Email -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="#!"
              target="_blank"
              role="button"
              ><i class="fas fa-envelope"></i
            ></a>

            <!-- Phone -->
            <a
              id="btnLlamar"
              class="btn btn-outline-light btn-floating m-1"
              href="tel:03471492315"
              role="button"
              ><i class="fas fa-phone"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div
          class="text-center p-3"
          style="background-color: rgba(0, 0, 0, 0.2)"
        >
          © 2022 Copyright:
          <a class="text-white" href="#!">MG Solutions</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!--End Footer-->
    </div>

    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
