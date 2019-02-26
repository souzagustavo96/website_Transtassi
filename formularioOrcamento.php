<!DOCTYPE html>

<!--===============================================================================================================-->

<!-- Package MV - Matheus e Vanessa
      Programming Since 2017-->

<!--===============================================================================================================-->
<html lang="en">
  <head>
    <!--importações do css e de outros recursos usados através da web-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Transtassi | Cotação</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/tassi.ico"/>
    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" /> 
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
    
  </head>
  <body>
  
  <!-- loader da pagina -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  

  <!-- Start header -->
  <header id="header">
    
    <!-- cabeçalho (parte com telefone e email em cima do menu) -->
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
          <a href="index.php"><img src="images/Tassi.png" width="160" height="100"></a>              
 
        </div>
        <!--início do menu na versão web (PC normal)-->
        <div id="navbar" class="navbar-collapse collapse">
          <!--opções do menu-->
          <!--IMPORTANTE = as uls que possuem a class "dropdown-menu" possuem subitens-->
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="index.php">Início</a></li>
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
  <!--fim do menu--   > 
  
  <!-- banner com as informações da página -->
  <section id="single-page-header" style="background-image: url('images/bannerCotacao.jpg')">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!--nome da página que você está-->
            <div class="single-page-header-left">
              <h2>Cotação</h2>
              
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <!--mapa do site para a página que você está-->
                <li><a href="index.html">Início</a></li>
                <li class="active">Cotação</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br><br><br><br>
  <!-- fim do banner-->

<?php
//formulario que será enviado por email.
  echo "<div class='container'>
        <div class = 'row' style='padding-top:28rem;padding-bottom:5rem'>
          <form class='col-md-10' action='enviarEmailCotacao.php' method='post' enctype='multipart/form-data'>
            
            <h3 align='left'><font color='black'>Faça seu orçamento!</font></h3>
            <small id='emailHelp' class='form-text text-muted'>Nunca vamos compartilhar suas informações com ninguém.</small><br><br>
            <div class='form-group'> 
              <label>Nome do solicitante</label>
              <input type='text' class='form-control' id='nomeSolicitante' placeholder='Nome completo' required name='nome'>
            </div>

            <div class='form-group'>
              <label>Nome da empresa</label>
              <input type='text' class='form-control' id='nomeEmpresa' placeholder='' required name='nomeEmpresa'>
            </div>

            <div class='form-group'>
              <label>CNPJ</label>
              <input type='text' class='form-control' id='cnpj' placeholder='' required name='cnpj'>
            </div>

            <div class='form-group'>
              <label>Endereço de email</label>
              <input type='email' class='form-control' placeholder='' required name='email'>
            </div>

            <div class='form-group'>
              <label>Telefone</label>
              <input type='tel' class='form-control' id='telefone' placeholder='' required name='telefone'>
            </div>

            <div class='form-group'>
              <label>Origem</label>
              <input type='text' class='form-control' id='origem' placeholder='cidade, estado' name='origem'>
            </div>

            <div class='form-group'>
              <label>Destino</label>
              <input type='text' class='form-control' id='cidade' placeholder='cidade, estado' name='destino'>
            </div>

            <div class='form-group'>
              <label>FISPQ</label>
              <input type='file' id='fispq' name='fispq'>
            </div>
            
            <div class='form-group'>
              <label>Tipo de veículo</label>
              <input type='text' class='form-control' id='tipoVeiculo' placeholder='Truck, Carreta, Bi-trem...' name='tipoVeiculo'>
            </div><br>

            <div class='form-group col-md-3'>
              <label>Quantidade</label><br>
              <input type='number' min='0' id='quantidade' placeholder='' name='quantidade'>
            </div>

            <div class='form-group col-md-7'>
              <label>Unidade de medida</label><br>
              <input type='radio' name='unidadeMedida' value='L' checked> Litros<br>
              <input type='radio' name='unidadeMedida' value='Kg'> Kg<br>
              <input type='radio' name='unidadeMedida' value='m<sup>3</sup>'> m<sup>3</sup><br>
            </div><br><br><br><br><br>

            <div class='form-group'>
              <label >Frequência</label>
              <input type='text' class='form-control' name='frequencia' placeholder=''>
            </div>


            <div class='form-group'>
              <label>Data prevista para carregamento</label>
              <input type='date' class='form-control' name='data' placeholder=''>
            </div>

            <div class='form-group'>
              <label>Observação (caso necessário)</label>
              <textarea type='text' maxlength ='550' style='width:100%' class='form-control' name ='obs'></textarea>
            </div>

            <button type='submit' class='btn' style='color:white;background-color:#32307b'>Enviar</button>
          </form>
        </div>
       </div>";
?>

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


  <!--importações do javascript-->
  
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
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="js/waypoints.js"></script>
  <script src="js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="js/bootstrap-progressbar.js"></script>  
  
 
  <!-- Custom js -->
  <script type="text/javascript" src="js/custom.js"></script>

  <!--Start of Tawk.to Script-
<script type="text/javascript">
   var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
   (function(){
     var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
     s1.async=true;
     s1.src='https://embed.tawk.to/571e840c1f16e76c25338653/default';
     s1.charset='UTF-8';
     s1.setAttribute('crossorigin','*');
     s0.parentNode.insertBefore(s1,s0);
   })();
</script>
End of Tawk.to Script-->
  
  </body>
</html>