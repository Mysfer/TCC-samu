<!DOCTYPE html> 
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OnSamu BM</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body>
 
 <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top animated fadeIn" id="nav">
      <div class="container">
          <img src="{{ asset('images/logooo.png') }}" width="45">


        <a class="navbar-brand navGrande Logoo" href="/">&nbsp SAMU Baixa Mogiana</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">

              <a class="nav-link navHome" href="/about"><font color="white" size="3px">Sobre</font></a>
            </li>           

            <li class="nav-item">
              <a class="nav-link navHome" href="/ouvidoria"><font color="white" size="3px">Ouvidoria</font></a>
            </li>

            <li class="nav-item">
              <a class="nav-link navHome" href="/ver/noticias"><font color="white" size="3px">Notícias</font></a>
            </li>

               @guest
                    
                        
                        
                    <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle navHome" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <font color="white" class="Titulo"size="3px">Instruções</font> <span class="caret"></span>
                        </a>
  
                 <div class="dropdown-menu Texto" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item Texto" href="/ajudaComunidade">
                                        Comunidade
                    </a>

                    <a class="dropdown-item Texto" href="/ajudaColaborador">
                                        Colaborador
                    </a>
                    <li><a class="nav-link navHome" href="{{ route('login') }}"><font color="white" size="3px">NEP</font></a></li>
                      
                        @else

                         <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle navHome" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <font color="white" class="Titulo"size="3px">Instruções</font> <span class="caret"></span>
                        </a>

                 <div class="dropdown-menu Texto" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item Texto" href="/ajudaComunidade">
                                        Comunidade
                    </a>

                    <a class="dropdown-item Texto" href="/ajudaColaborador">
                                        Colaborador
                    </a>
 
                    <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle navHome" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <font color="white" class="Titulo"size="3px">{{ Auth::user()->name }}</font> <span class="caret"></span>
                        </a>

                 <div class="dropdown-menu Texto" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item Texto" href="/cursos">
                                        Meus Cursos 
                    </a>
  
                  
                    <a class="dropdown-item Texto" href="{{ route('logout') }}"

                    <a class="dropdown-item Texto" href="{{ route('logout') }}"

                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                        Sair
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </div>
                </li>
                        @endguest
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
        <main>
            @yield('content')
        </main>
    </div>

   <!-- Footer -->
    <footer class="footer animated fadeInUp" >
        <br><br>
        <div class="container fadeInUp">
        <h5 class="m-0 text-left text-white fadeInUp" ><i>Plataforma Web do SAMU da Baixa Mogiana</h5>&nbsp;&nbsp;&nbsp;&nbsp;   <img id="imgFooter" src="{{ asset('images/logo.png') }}"> <br> 
        <p class="text-white fadeInUp">Acesse a nossa página no  <a href="https://www.facebook.com/samubaixamogiana/?rf=287489251342339"<i style="margin: 2px" class="	fa fa-facebook-square"> Facebook</a></p>
        <p class="text-white fadeInUp"><i style="margin: 2px" class="fa fa-phone"> Telefone Administrativo: (19) 3811-7450</i> </p> 
        <a href="https://github.com/barbosaGdev/TCC-samu" class="text-white fadeInUp"> Copyright © OnSamu BM 2018</a>
        
      </div>
  
      <!-- /.container -->

      <div class="footer-copyright py-3 text-center">
        
      </div>
    </footer>
                      



  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/contact_me.js') }}"></script>
  <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
  <script src="{{ asset('js/carousel.js') }}"></script>


</body>
</html>