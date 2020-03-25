@extends('layouts.default')
    @section('content')
        
        <section class="container"> <!-- Start Posts Section-->
            <div class="last-posts">
                <h4>Todas Publicações</h4>
            </div>
            
            <div class="row mt-3 ">

                @foreach($posts as $post)
                    <div class="card-posts mx-auto ">
                        <a class="card-link" href="{{$post->id}}/{{$post->title}}">
                            <img class="card-img-top img-posts" src={{asset($post->image)}}>
                        </a>
                        
                        <div class="body-card">
                            <a class="card-link" href="{{$post->id}}/{{$post->title}}">
                                <h5 class="card-title">{{$post->title}}</h5>
                            </a>
                            <span class="card-date"><i class="far fa-calendar"></i> {{\Carbon\Carbon::parse($post->updated_at)->format('d/m/Y')}} </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </section> <!-- End Posts Section-->

    @stop