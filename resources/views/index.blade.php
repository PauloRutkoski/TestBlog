@extends('layouts.default')
    @section('content')
        <section class="container container-main mt-2"> <!-- Start Main Section-->
            
           
            <div class="main-posts">
                <div class="main-posts-primary main-posts-container">
                    <a class="card-link" href="{{$posts[$postsLength]->id}}/{{$posts[$postsLength]->title}}">
                        <img class="img-primary" src={{asset($posts[$postsLength]->image)}} >
                    </a>

                    <div class="body-card">
                        <a class="card-link" href="{{$posts[$postsLength]->id}}/{{$posts[$postsLength]->title}}">
                            <h5 class="primary-title">
                                {{$posts[$postsLength]->title}}
                            </h5>
                        </a>
                        <span class="card-date"> 
                            <i class="far fa-calendar"></i>
                            {{\Carbon\Carbon::parse($posts[$postsLength]->updated_at)->format('d/m/Y')}} 
                        </span>
                    </div>
                </div>

                
                <div class="main-posts-secondary ">
                    @for($i = 1; $i <= 3; $i++)
                        <?php $index = $postsLength - $i;?>
                        <div class="secondary-post main-posts-container">

                            <a class="card-link" href="{{$posts[$index]->id}}/{{$posts[$index]->title}}">
                                <img class="img-secondary zoom " src={{asset($posts[$index]->image)}}>
                            </a>

                            <div class="body-card">
                                <a class="card-link" href="{{$posts[$index]->id}}/{{$posts[$index]->title}}">
                                    <h5 class="secondary-title ">{{$posts[$index]->title}}</h5>
                                </a>
                                <span class="card-date">
                                    <i class="far fa-calendar"></i>
                                    {{\Carbon\Carbon::parse($posts[$index]->updated_at)->format('d/m/Y')}}
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
            <?php     
                $minIndex = 1;

                for($i = 1; $i <= 6 and $minIndex == 1; $i++){
                    $index = $postsLength - ($i + 3);  

                    if($index == 0){
                        $minIndex = 0;
                    }            
            ?>
                        <div class="card-posts mx-auto ">
                            <a class="card-link" href="{{$posts[$index]->id}}/{{$posts[$index]->title}}">
                                <img class="card-img-top img-posts" src="{{asset($posts[$index]->image)}}">
                            </a>

                            <div class="body-card">
                                <a class="card-link" href="{{$posts[$index]->id}}/{{$posts[$index]->title}}">
                                    <h5 class="card-title">{{$posts[$index]->title}}</h5>
                                </a>
                                <span class="card-date">
                                    <i class="far fa-calendar"></i>
                                    {{\Carbon\Carbon::parse($posts[$index]->updated_at)->format('d/m/Y')}}
                                </span>
                            </div>
                        </div>
    
                <?php } ?>
                
            </div>
        </section> <!-- End Posts Section-->

        
    @stop
         