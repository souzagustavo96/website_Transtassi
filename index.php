<?php

$cookieExistente = (isset($_COOKIE['modal']));

if(!$cookieExistente){
  setcookie('modal','ok',strtotime('+10 seconds'));
}
?>

<!DOCTYPE html>

<!--===============================================================================================================-->

<!-- Package MV - Matheus e Vanessa
      Programming Since 2017-->

<!--===============================================================================================================-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Transtassi - Transportes</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/tassi.ico"/>
    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="fancybox/jquery.fancybox.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css"/> 
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/styleM.css" rel="stylesheet" type="text/css">

    <!--Link do Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header -->
  <header id="header">
    <!-- header top search -->
    <div class="header-top">
      <div class="container">
        <form action="">
          <div id="search">
          <input type="text" placeholder="Type your search keyword here and hit Enter..." name="s" id="m_search" style="display: inline-block;">
          <button type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
        </form>
      </div>
    </div>
    <!-- header bottom -->
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-contact">
              <ul>
                <li>
                  <div class="phone">
                    <i class="fa fa-phone"></i>
                    (35) 2101-1600
                  </div>
                </li>
                <li>
                  <div class="mail">
                    <i class="fa fa-envelope"></i>
                    transtassi@transtassi.com.br
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-login">
              <!--botão que levará à cotação-->
              <a class="login modal-form" href="formularioOrcamento.php">COTAÇÃO</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- End header -->
  
  <!-- Start login modal window
  <div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
      <!- Start login section 
      <div id="login-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-truck"></i>Selecione a carga desejada</h4>
        </div>
        <div class="modal-body">
          <form action="formularioOrcamento.php" method="post">
            <div class="container">
              <div class="row">
                <div class="col-sm-3">
                  <select style="width: 300px" name="produtos">
                    <option value="quimico">Químico</option>
                    <option value="grao">Grãos</option>
                    <option value="minerio">Minério</option>
                    <option value="madeira">Madeira</option>
                    <option value="outros">Outros</option>
                  </select>
                  <center><br>
                  <input type="submit" value="Continuar" style="color: #c10b1c">
                  </center>
                </div>
              </div>   
            </div>
          </form>
        </div>
        <div class="modal-footer footer-box">
          <p style="color: #32307b">Quer mais informações sobre a empresa?</p>
          <span>Obtenha mais informações em <a href="#"><font color="#c10b1c">Fale Conosco</font></a></span>            
        </div>
      </div>
    </div>
  </div>
 End login modal window -->

   <!-- Início do menu -->
  <section id="menu-area">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- menu para a versão mobile -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Logo ao lado das opções do menu -->              
          <a href="index.php"><img src="images/Tassi.png" width="200"></a>              
 
        </div>
        <!--início do menu na versão web (PC normal)-->
        <div id="navbar" class="navbar-collapse collapse">
          <!--opções do menu-->
          <!--IMPORTANTE = as uls que possuem a class "dropdown-menu" possuem subitens-->
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index.php">Início</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Empresa <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="empresasGrupo.html">Empresas do Grupo</a></li>
                <li><a href="historia.html">História</a></li>                
                <li><a href="quemSomos.html">Quem Somos</a></li>
                <li><a href="estrutura.html">Estrutura</a></li>                       
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Certificações e Licenças <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="certificacoes.html">Certificações</a></li>                
                <li><a href="licencas.html">Licenças</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Serviços e Equipamentos <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="areasDeAtuacao.html">Áreas de Atuação</a></li>                
                <li><a href="frota.html">Frota</a></li>
                <li><a href="tecnologias.html">Tecnologias</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contatos <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">  
                <li><a href="faleConosco.html">Fale conosco</a></li>              
                <li><a href="trabalheConosco.html">Trabalhe conosco</a></li>
              </ul>
            </li>
          </ul>                     
        </div>
        
      </div>     
    </nav>
  </section>
  <!--fim do menu--> 

  <!-- Start slider -->
  <section id="slider" style="margin-bottom: 3rem">
    <div class="main-slider">

      <!-- Slider da segurança -->
      <div class="single-slide">
        <!-- Imagem do fundo -->
        <img src="images/seguranca.jpg" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">

              <!-- Texto -->
              <div class="col-md-6 col-sm-6">
                <div class="slide-article">
                  <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"><br>Nossos planos para amanhã dependem da segurança de hoje.</h1>
                  <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.75s"></p>
                </div>
              </div>

              <!-- Logo da Tassi por cima -->
              <div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp">
                  <img src="images/Tassi.png">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slider da melhor equipe -->
      <div class="single-slide">
        <!-- Imagem do fundo -->
        <img src="images/funcionarios.jpg" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="slide-article">
                  <!-- Texto -->
                  <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s"><br>A melhor equipe de profissionais para sua empresa!</h1>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s"></p>
                </div>
              </div>

              <!-- Logo da Tassi por cima -->
              <div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp">
                  <img src="images/Tassi.png">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>   

      <!-- Slider da química perfeita -->
      <div class="single-slide">
        <!-- Imagem do fundo -->
        <img src="images/carousel.jpeg" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="slide-article">
                  <!-- Texto -->
                  <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s"><br><br>A química perfeita para o transporte!</h1>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s"></p>   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 

      <!-- Slider do meio ambiente -->
      <div class="single-slide">
        <!-- Imagem do fundo -->
        <img src="images/meioAmbiente.jpg" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="slide-article">
                  <!-- Texto -->
                  <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Logística consciente é transportar com respeito ao meio ambiente.</h1>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s"></p>   
                </div>
              </div>

              <!-- Logo da Tassi por cima -->
              <div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp">
                  <img src="images/Tassi.png">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </div>
  </section>
  <!-- End slider -->

  <!-- Começo Tudo que sua empresa precisa -->
  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Tudo que sua empresa precisa</h2>
            <span class="line"></span> 
          </div>
        </div>
        <div class="col-md-12">
          <div class="feature-content">
            <div class="row">

              <!-- Frota de qualidade -->
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-truck feature-icon"></i>
                  <h4 class="feat-title">Frota de Qualidade</h4>
                  <p align="justify">A Transtassi possui caminhões modernos dentro das especificações e com diversas tecnologias embarcadas, sempre prontos para atender a todas as necessidades de nossos clientes.</p>
                </div>
              </div>

              <!-- Segurança Impecável -->
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-people-carry feature-icon"></i>
                  <h4 class="feat-title">Segurança Impecável</h4>
                  <p align="justify">Ao decorrer dos anos o Grupo Tassi procurou desenvolver, aplicar e inovar métodos de controle em segurança, possuindo técnicas e monitores e uma ampla estrutura para treinamentos.</p>
                </div>
              </div>

              <!-- Meio Ambiente -->
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-globe-americas feature-icon"></i>
                  <h4 class="feat-title">Meio Ambiente</h4>
                  <p align="justify">O Grupo Tassi é certificado pelo Programa Ambiental do Transporte e é a 4ª empresa no Brasil a obter o certificado SASSMAQ e está habilitada a operar com todas as classes de risco. </p>
                </div>
              </div>

              <!-- Gestão Responsável -->
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-chart-bar feature-icon"></i>
                  <h4 class="feat-title">Gestão Responsável</h4>
                  <p align="justify">O Grupo Tassi trabalha eticamente sempre buscando uma relação ganha-ganha, com análise de informações e KPIs em todos os setores para alcançar seus objetivos.</p>
                </div>
              </div>

              <!-- Destaque na Atuação -->
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-trophy feature-icon"></i>
                  <h4 class="feat-title">Destaque na Atuação</h4>
                  <p align="justify">Com o intuito de evitar falhas nos processos, o Grupo Tassi possui uma equipe treinada para gerenciar as não conformidades ocorridas.</p>
                </div>
              </div>

              <!-- Rastreamento 24h -->
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-clock feature-icon"></i>
                  <h4 class="feat-title">Rastreamento 24 horas</h4>
                  <p align="justify">Possuímos uma equipe dedicada e própria atuando 24 horas para garantir a excelência e a segurança da prestação de serviços. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Feature -->

  <!-- Start counter -->
  <section id="counter" style="margin-bottom: 3rem">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="counter-area">
              <div class="row">

                <!-- Counter das cidades atendidas -->
                <div class="col-md-3 col-sm-6">
                  <div class="single-counter">
                    <div class="counter-icon">
                      <i class="fa fa-city"></i>
                    </div>+ de 
                    <div class="counter-no counter">
                      200
                    </div>
                    <div class="counter-label">
                      Cidades Atendidas
                    </div>
                  </div>
                </div>
                
                <!-- Counter dos km rodados -->
                <div class="col-md-3 col-sm-6">
                  <div class="single-counter">
                    <div class="counter-icon">
                      <i class="fa fa-road"></i>
                    </div>+ de
                    <div class="counter-no counter">
                      4,300,000 
                    </div>
                    <div class="counter-label">
                      Km rodados em 2018
                    </div>
                  </div>
                </div>
                
                <!-- Counter das viagens realizadas-->
                <div class="col-md-3 col-sm-6">
                 <div class="single-counter">
                    <div class="counter-icon">
                      <i class="fa fa-shipping-fast"></i>
                    </div>+ de
                    <div class="counter-no counter">
                      25,000
                    </div>
                    <div class="counter-label">
                      Viagens Realizadas
                    </div>
                  </div>
                </div>
                
                <!-- Counter das toneladas transportadas-->
                <div class="col-md-3 col-sm-6">
                  <div class="single-counter">
                    <div class="counter-icon">
                      <i class="fa fa-truck-loading"></i>
                    </div>+ de
                    <div class="counter-no counter">
                      1,000,000
                    </div>
                    <div class="counter-label">
                      Toneladas Transportadas
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End counter -->

 <!--Começo dos Serviços Providos-->
<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
          <h3>SERVIÇOS PROVIDOS</h3>
          <span class="line"></span>
        </div>
        <div class="row items-container clearfix">

            <!-- Card Químicos -->
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="areasDeAtuacao.html">
                            <img src="images/transporteQuimico.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="areasDeAtuacao.html">
                            <h6>Químicos</h6>
                        </a>
                        <p>Todos os equipamentos são de aço inox, trazendo, assim, maior segurança ao transporte dos produtos.</p>
                    </div>
                </div>
            </div>

            <!-- Card Mineração -->
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="areasDeAtuacao.html">
                            <img src="images/transporteMineracao.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="areasDeAtuacao.html">
                            <h6>Mineração</h6>
                        </a>
                        <p>Com uma frota nova, dispõe para seus clientes um serviço personalizado no segmento de Mineração.</p>
                    </div>
                </div>
            </div>

            <!-- Card Mercosul -->
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="areasDeAtuacao.html">
                            <img src="images/mercosul.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="areasDeAtuacao.html">
                            <h6>Mercosul</h6>
                        </a>
                        <p>O Grupo Tassi opera no Mercosul com veículos licenciados, além de um despachante aduaneiro dedicado para agilizar as operações na fronteira.</p>
                    </div>
                </div>
            </div>

            <!-- Card Locação de Veículos -->
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="areasDeAtuacao.html">
                            <img src="images/locacaoDeVeiculos.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="areasDeAtuacao.html">
                            <h6>Locação de Veículos</h6>
                        </a>
                        <p>O Grupo Tassi oferece a locação de uma frota pesada nova e moderna e também de uma frota leve, todos de acordo com a legislação vigente.</p>
                    </div>
                </div>
            </div>

            <!-- Card Containers -->
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="areasDeAtuacao.html">
                            <img src="images/transporteContainer.png" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="areasDeAtuacao.html">
                            <h6>Containers</h6>
                        </a>
                        <p>Esse transporte é realizado através de Bugs, sendo efetivado com toda segurança e total responsabilidade, levando seu produto a qualquer lugar do Brasil.</p>
                    </div>
                </div>
            </div>

            <!-- Card Madeira -->
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="areasDeAtuacao.html">
                            <img src="images/transporteMadeira.jpeg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="areasDeAtuacao.html">
                            <h6>Madeira</h6>
                        </a>
                        <p>O Grupo Tassi possui em sua gama de serviços toda a cadeia logística para o transporte de madeira contemplando ações na área florestal e entrega no cliente final</p>
                    </div>
                </div>
            </div>

            <!-- Card Agronegócio -->
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="areasDeAtuacao.html">
                            <img src="images/agronegocio.png" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="areasDeAtuacao.html">
                            <h6>Agronegócio</h6>
                        </a>
                        <p>Acreditamos no desenvolvimento do Agronegócio no país, por isso atuamos nesse segmento com Graneleiros (7 e 9 eixos).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Fim Serviços Providos-->

  <!-- Começo do faça sua cotação -->
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2 class>Faça sua cotação agora mesmo!</h2><br>
                <center>
                  <!-- Botão da cotação -->
                  <a href="formularioOrcamento.php"><button type="button" class="btn btn-danger" style="width: 180px;height: 80px"><h3>Cotação</h3></button></a>
                </center>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fim do faça sua cotação -->

<!-- Começo do rodapé -->
  <footer id="footer">
    <div class="container">
      <div class="row">

        <!-- Informações da matriz -->
        <div class="col-md-3 col-sm-3">
          <div class="footer-left">
            <p>MATRIZ</p>
            <p> <i class="fa fa-map-marker-alt"></i> Av. João Pinheiro, 2055<br>Centro, Poços de Caldas - MG<br>CEP: 37701-387</p>
            <p> <i class="fa fa-phone"></i> (35)2101-1600</p>
          </div>
        </div>

        <!-- Informações da filial de Guarulhos -->
        <div class="col-md-3 col-sm-3">
          <div class="footer-left">           
            <p>FILIAL GUARULHOS</p>
            <p> <i class="fa fa-map-marker-alt"></i> Av. José Brumati, 2070<br>Jardim Santo Expedido, Guarulhos - SP<br>CEP: 07160-170</p>
            <p> <i class="fa fa-phone"></i> (11)4968-5400</p>
          </div>
        </div>

        <!-- Informações da filial de Candeias -->
        <div class="col-md-3 col-sm-3">
          <div class="footer-left">
            <p>FILIAL CANDEIAS</p>
            <p> <i class="fa fa-map-marker-alt"></i> Rodovia BA 522, S/N - KM 01<br>Bairro Caroba, Candeias, BA<br>CEP: 43813-300</p>
            <p> <i class="fa fa-phone"></i> (71)99416-0081</p>
          </div>
        </div>

        <div class="col-md-3 col-sm-3">
          <div class="footer-right">

            <!-- Link do facebook -->
            <a href="https://www.facebook.com/transtassi" target="_blank"><i class="fab fa-facebook"></i></a>

            <!-- Link do linkedin -->
            <a href="https://www.linkedin.com/company/transtassi-ltda?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A1945052%2Cidx%3A1-1-1%2CtarId%3A1445630894507%2Ctas%3Atranstassi" target="_blank"><i class="fab fa-linkedin"></i></a>
            
            <!-- Email -->
            <p> <i class="fa fa-envelope"></i> transtassi@transtassi.com.br </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Fim do rodapé -->

<!--Começo da janela modal 
<div class="modal fade bd-example-modal-lg" id="modal50Anos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- Título da janela 
        <h3 class="modal-title" id="exampleModalLabel">Transtassi 50 anos</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" style="width: 100%;height: 100%">
          <!-- Aqui é colocado o vídeo na janela -
          <source src="videos/cafe.mp4" type="video/mp4">
        </video>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fim da janela modal -->


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script src="fancybox/jquery.fancybox.min.js"></script>
 <!-- counter -->
  <script src="js/waypoints.js"></script>
  <script src="js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="js/bootstrap-progressbar.js"></script>  
  

  <script src="js/script.js"></script>


  <!-- Custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <?php if(!$cookieExistente): ?>
<script type="text/javascript">
  $("#modal50Anos").modal("show");
</script>
<?php endif; ?>

<!--Start of Tawk.to Script
<script type="text/javascript">
  $(document).ready(function(){
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
       (function(){
         var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
         s1.async=true;
         s1.src='https://embed.tawk.to/571e840c1f16e76c25338653/default';
         s1.charset='UTF-8';
         s1.setAttribute('crossorigin','*');
         s0.parentNode.insertBefore(s1,s0);
       })();
  });

  //window.onLoad(function(){
//

  //})
</script>
End of Tawk.to Script-->
  
  </body>
</html>