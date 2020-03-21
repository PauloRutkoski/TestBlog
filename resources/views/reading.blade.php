@extends('layouts.default')
    @section('content')
        <section class="container">
            <div class="text">
                <h1>{{$post->title}} </h1>

                <div class="post-info">
                    <span class="author">
                        <i class="far fa-user"></i> 
                        {{$post->author}}
                    </span>
                    <span class="date">
                        <i class="far fa-calendar"></i>
                        {{\Carbon\Carbon::parse($post->updated_at)->format('d/m/Y')}}
                    </span> 
                </div>

                <img class="reading-img" src="https://source.unsplash.com/random/">

                {{$post->text}}

            </div>
        </section>

    @stop