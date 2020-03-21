@extends('layouts.default')
    @section('content')
        <section class="container container-main mt-2"> <!-- Start Main Section-->
            
           
            <div class="main-posts">
                <div class="main-posts-primary main-posts-container">
                    <a class="card-link" href="{{$posts[$lastIndex]->id}}">
                        <img class="img-primary" src="{{$posts[$lastIndex]->image}}">
                    </a>

                    <div class="card-body">
                        <a class="card-link" href="{{$posts[$lastIndex]->id}}">
                            <h5 class="primary-title">
                                {{$posts[$lastIndex]->title}}
                            </h5>
                        </a>
                        <span class="card-date"> 
                            <i class="far fa-calendar"></i>
                            {{\Carbon\Carbon::parse($posts[$lastIndex]->updated_at)->format('d/m/Y')}} 
                        </span>
                    </div>
                </div>

                
                <div class="main-posts-secondary ">

                    @for($i = $lastIndex - 1; $i >= 0; $i--)
                        <div class="secondary-post main-posts-container">

                            <a class="card-link" href="{{$posts[$i]->id}}">
                                <img class="img-secondary " src="{{$posts[$i]->image}}">
                            </a>

                            <div class="card-body ">
                                <a class="card-link" href="{{$posts[$i]->id}}">
                                    <h5 class="secondary-title ">{{$posts[$i]->title}}</h5>
                                </a>
                                <span class="card-date">
                                    <i class="far fa-calendar"></i>
                                    {{\Carbon\Carbon::parse($posts[$i]->updated_at)->format('d/m/Y')}}
                                </span>
                            </div>
                        </div>
                    @endfor
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
                @for($i = $lastIndex ; $i >= 0; $i--)
                <div class="card-posts mx-auto ">
                    <a class="card-link" href="{{$posts[$i]->id}}">
                        <img class="card-img-top img-posts" src="{{$posts[$i]->image}}">
                    </a>

                    <div class="card-body">
                        <a class="card-link" href="{{$posts[$i]->id}}">
                            <h5 class="card-title">{{$posts[$i]->title}}</h5>
                        </a>
                        <span class="card-date">
                            <i class="far fa-calendar"></i>
                            {{\Carbon\Carbon::parse($posts[$i]->updated_at)->format('d/m/Y')}}
                         </span>
                    </div>
                </div>
                @endfor
            </div>
        </section> <!-- End Posts Section-->
    @stop
         