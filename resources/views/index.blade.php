@extends('layouts.default')
    @section('content')
        <section class="container container-main mt-2"> <!-- Start Main Section-->

            <div class="main-posts">

                <div class="main-posts-primary main-posts-container">
                    <a class="card-link" href="">
                        <img class="img-primary" src="https://source.unsplash.com/random/">
                    </a>

                    <div class="card-body">
                        <a class="card-link" href="">
                            <h5 class="primary-title">Titulo Post Titulo Post Titulo Post Titulo Post</h5>
                        </a>
                        <span class="card-date">Data de Postagem </span>
                    </div>
                </div>
                
                <div class="main-posts-secondary ">

                    <div class="secondary-post main-posts-container">

                        <a class="card-link" href="">
                            <img class="img-secondary " src="https://source.unsplash.com/random/">
                        </a>

                        <div class="card-body ">
                            <a class="card-link" href="">
                                <h5 class="secondary-title ">Titulo Post Titulo Post Titulo Post Titulo Post</h5>
                            </a>
                            <span class="card-date">Data de Postagem </span>
                        </div>
                    </div>

                    <div class="secondary-post main-posts-container">

                        <a class="card-link" href="">
                            <img class="img-secondary " src="https://source.unsplash.com/random/">
                        </a>

                        <div class="card-body ">
                            <a class="card-link" href="">
                                <h5 class="secondary-title ">Titulo Post Titulo Post Titulo Post Titulo Post</h5>
                            </a>
                            <span class="card-date">Data de Postagem </span>
                        </div>
                    </div>

                    <div class="secondary-post">
                        <a class="card-link" href="">
                            <img class="img-secondary " src="https://source.unsplash.com/random/">
                        </a>

                        <div class="card-body ">
                            <a class="card-link" href="">
                                <h5 class="secondary-title ">Titulo Post Titulo Post Titulo Post Titulo Post</h5>
                            </a>
                            <span class="card-date">Data de Postagem </span>
                        </div>
                    </div>

                </div>
                
            </div>

        </section> <!-- End Main Section-->
        
        <section class="container"> <!-- Start Posts Section-->
            <hr>
            <div class="last-posts">
                <h4>Últimas Publicações</h4>
                    <a href="/posts">
                        Veja Todas >
                    </a>
            </div>
            
            <div class="row mt-3 ">

                <div class="card-posts mx-auto ">
                    <a class="card-link" href="/reading">
                        <img class="card-img-top img-posts" src="https://source.unsplash.com/random/">
                    </a>

                    <div class="card-body">
                        <a class="card-link" href="">
                            <h5 class="card-title">Titulo Post Titulo Post Titulo Post Titulo Post</h5>
                        </a>
                        <span class="card-date">Data de Postagem </span>
                    </div>
                </div>


                <div class="card-posts mx-auto">
                    <a class="card-link" href="">
                        <img class="card-img-top img-posts" src="https://source.unsplash.com/random/">
                    </a>

                    <div class="card-body">
                        <a class="card-link" href="">
                            <h5 class="card-title">Titulo Post Titulo Post Titulo Post Titulo Post</h5>
                        </a>
                        <span class="card-date">Data de Postagem </span>
                    </div>
                </div>


                <div class="card-posts mx-auto" >
                    <a class="card-link" href="">
                        <img class="card-img-top img-posts" src="https://source.unsplash.com/random/">
                    </a>

                    <div class="card-body">
                        <a class="card-link" href="">
                            <h5 class="card-title">Titulo Post Titulo Post Titulo Post Titulo Post</h5>
                        </a>
                        <span class="card-date">Data de Postagem </span>
                    </div>
                </div>  

                <div class="card-posts mx-auto" >
                    <a class="card-link" href="">
                        <img class="card-img-top img-posts" src="https://source.unsplash.com/random/">
                    </a>

                    <div class="card-body">
                        <a class="card-link" href="">
                            <h5 class="card-title">Titulo Post Titulo Post Titulo Post  </h5>
                        </a>
                        <span class="card-date">Data de Postagem </span>
                    </div>
                </div>  

            </div>
        </section> <!-- End Posts Section-->
    @stop
         