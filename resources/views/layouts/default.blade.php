<!-- Ajustar a deformacao no card ao diminuir e limitar numero de caracteres do titulo conforme o ultimo card-->
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Test Blog </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--css-->
        <link rel="stylesheet" href=" {{ asset('css/style.css') }}">

        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/9a277d3f39.js" crossorigin="anonymous"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <header> <!-- Start Header Menu-->
            <nav class="container navbar navbar-expand-sm ">   
                    <a href="/" class="navbar-brand">
                        Blog Brand
                    </a>

                    <!--Menu Hamburger-->
                    <button class="navbar-toggler " data-toggle="collapse" data-target="#nav-target">
                        <i class="fa fa-bars text-light" aria-hidden="true"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="nav-target">

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/posts">Posts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                        </ul>

                    </div>
            </nav>
        </header> <!-- End Header Menu-->

        @yield('content');

        <footer class="mt-3"> <!-- Start Footer-->
            <hr>
            
            <div class="d-block text-center">
                <a href="" class="btn ">
                    <i class="fab fa-facebook fa-lg" ></i>
                </a>

                <a href="" class="btn ">
                    <i class="fab fa-twitter fa-lg" ></i>
                </a>
                
                <a href="" class="btn ">
                    <i class="fab fa-instagram fa-lg" ></i>
                </a>     

                <a href="" class="btn ">
                    <i class="fab fa-youtube fa-lg" ></i>
                </a>  
            </div>
            
            <div class="d-block text-center copyright-area">
                <p >ALL RIGHTS RESERVED</p>
                <p >&copy; Copyright 2020 | Test Blog </p>                    
                        
            </div>
        </footer> <!-- End Footer-->
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>