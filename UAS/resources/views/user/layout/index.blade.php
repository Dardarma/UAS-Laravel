
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anhome Gun Shop| {{$judul}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('assets/css/index.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/landingpage.css')}}">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="bg-black">
    <main>
        <header>
            <nav>
                <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#" style="color: red">Anhome Gun Shop</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active red" aria-current="page" href="{{Route('Beranda')}}">Home</a>
                          </li>
                          <li class="nav-item">
                            @if (Auth::check())
                            <a class="nav-link red" href="{{Route('store_login')}}">Shop</a>
                            @else
                            <a class="nav-link red" href="{{Route('store')}}">Shop</a>
                            @endif
                          </li>
                          <li class="nav-item">
                            <a class="nav-link red" href="{{Route('cetak_nota')}}">Profil</a>
                          </li>
                        </ul>
                              <form class="d-flex mx-auto" role="search" >
                                <input class="form-control me-2 border-danger" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-danger" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                              </form>

                              @if (Auth::check())
                              <a href="{{Route('cart')}}" class="btn btn-danger mx-1">
                                <i class="fa-solid fa-bag-shopping"></i>
                              </a>
                              @endif

                              @if (Auth::check())
                            <a href="{{Route('logout')}}" class="btn btn-danger">Logout</a>
                              @else
                            <a href="{{Route('tlogin')}}" class="btn btn-danger">Login/register</a>
                              @endif

                      </div>
                    </div>
                  </nav>
            </nav>
        </header>
    </main>
    @yield('content')
    <footer class=" bg-dark text-white pt-5 pb-4">
      <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto">
            <h4 class="text-danger">AnHome Gun Shop</h4>
            <p>Gak tau disi apa </p>
          </div>
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto">
            <h4 class="text-danger">Contac US</h4>
            <ul>
              <li style="list-style-type: none">
                <i class="fa-brands fa-instagram icon"></i>  
                <a href="#" class="linke">@nirwana</a>
              </li>
              <li style="list-style-type: none">
                <i class="fa-brands fa-facebook icon"></i>
                <a href="#" class="linke">@nirwana</a>
              </li>
              <i class="fa-brands fa-whatsapp icon"></i>
              <a href="#" class="linke">@nirwana</a>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://kit.fontawesome.com/44d172af1c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="{{asset ('assets/js/custom.js')}}"></script>
</body>
</html>