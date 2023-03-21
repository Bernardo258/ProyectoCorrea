<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <!-- MDBootstrap -->
    <script src="https://kit.fontawesome.com/825719bb21.js" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
    ></script>
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">

<<<<<<< HEAD
=======

            <!-- Fonts -->
            <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

            <!--CSS-->
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
            <link rel="stylesheet" href="{!! asset('css/stilo.css') !!}"> 

>>>>>>> b161bb7 (Muchos cambios locos (APP Dulceria))
    <script scr="{{asset('js/mdb.min.js')}}"></script>
    <title>Desarrollo web profesional</title>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @guest
                <li class="nav-item ">
                  <a class="nav-link" aria-current="page" href="http://127.0.0.1:8000/">Inicio</a>
                </li>
<<<<<<< HEAD
                <li class="nav-item">
=======
                @endguest
    
                {{-- <li class="nav-item">
>>>>>>> b161bb7 (Muchos cambios locos (APP Dulceria))
                  <a class="nav-link" href="#">Serie</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Peliculas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Informacion sobre One Piece</a>
                </li>
                @auth
                  <div class="d-flex aling-items-center">
                    <a href="{{route ('post.create')}}" class="btn btn-link px-3 me-2">
                      <i class="fas fa-plus-circle"></i>Crear Post
                    </a>
                  </div>
                @endauth
                @auth
                <form action="{{route('logout')}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-link px-3 me-2">LogOut</button>
                </form>
                @endauth
          
                @guest
                <li class="nav-item">
                  <a class="nav-link" href="http://127.0.0.1:8000/login">LOGIN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://127.0.0.1:8000/formulario">Sign In</a>
                </li>
                @endguest
                

                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
      
        <!-- Background image -->
        <div
          class="p-5 text-center bg-image"
          style="
            background-image: url('https://i.blogs.es/259581/one-piece/1366_2000.jpeg');
            height: 400px;
          "
        >
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">One Piece</h1>
                <h4 class="mb-3">Creador: Eiichirō Oda</h4>
                <a class="btn btn-outline-light btn-lg" href="#!" role="button"
<<<<<<< HEAD
                >Live action</a
=======
                >“Preocúpate por la calidad de tus productos, mucha gente no está preparada para la excelencia y sorprenderás”</a
>>>>>>> b161bb7 (Muchos cambios locos (APP Dulceria))
                >
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>
      <div class="container mt-5 mb-5">

        <h1 style="color:rgba(203, 46, 156, 0.962);">@yield('titulo')</h1>
      
        <hr class="hr">
      
        @yield('contenido')
      
      </div>
<<<<<<< HEAD
      <footer class="bg-success text-center text-white">
=======

{{-- <footer class="bg-white text-center text-white mt-4">
>>>>>>> b161bb7 (Muchos cambios locos (APP Dulceria))
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="">Bernardo Paredes De Santos</a>
  </div>
  <!-- Copyright -->
<<<<<<< HEAD
</footer>
=======
</footer>  --}}


<footer>
  <div class="flex container ">
      <div class="footer-acerca">
          <h5>Acerca de Dulcerias UTA</h5>
          <p>Esto es solo una tarea para la universidad IDGS del cuatrimestre 8-A-II, todo esto es con fines educativos
              y de aprendizaje. los productos seleccionados vistos en este página es mero gusto de los creadores de esta misma página
              somos dulceros de corazón y nunca de ocasión.</p>
      </div>

      <div class="footer-links">
          <h5>Links rapidos</h5>
          <ul>
              <li><a href="#">Nosotros</a></li>
              <li><a href="#">Servicios</a></li>
              <li><a href="#">Testimonios</a></li>
              <li><a href="#">Contacto</a></li>
          </ul>
      </div>

      <div class="footer-suscribete">
          <h5 class="sigueme">Sigueme</h5>
          <ul>
              <li><a href="https://twitter.com/m07636150" target="_blank"><span class="fab fa-twitter"></span></a></li>
              <li><a href="https://www.instagram.com/ulises_fc/" target="_blank"><span class="fab fa-instagram"></span></a></li>
              <li><a href="https://github.com/Rck23" target="_blank"><span class="fab fa-github"></span></a></li>
              <li><a href="https://www.linkedin.com/in/ulises-mart%C3%ADnez-olivares-09276b258/" target="_blank"><span class="fab fa-linkedin-in"></span></a></li>
          </ul>
      </div>
  </div>

  <small>
      Copyright &copy; 2023 Seguridad en el desarrollo de aplicaciones | Universidad Tecnológica de Aguascalientes <span class="fa fa-heart"></span> Realizado por <a href="https://github.com/Rck23">Equipo 1</a>
  </small>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/95dc93da07.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript" src="{!! asset('js/animacion.js') !!}" async></script>


>>>>>>> b161bb7 (Muchos cambios locos (APP Dulceria))
</body>
</html>