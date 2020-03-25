<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;


$factory->define(Post::class, function (Faker $faker) {
    $text = createText($faker);
    $imagePath = createImagePath($faker);
    $title = createTitle($faker);
    
    return [
        'title'     => $title,
        'text'      => $text,
        'image'     => $imagePath ,
        'author_id' => $faker->numberBetween($min = 1, $max = 5)
    ];
});

function createText(Faker $faker){
    $text = '';
    for($i = 0; $i < 5; $i++){
        $text .= "<p>";
        $text .= $faker->text( $maxNbChars = 700); 
        $text .= "</p>";
    }
    return $text;
}

function createImagePath(Faker $faker){
    $imagePath = 'storage/TestImage';
    $imagePath  .= $faker->numberBetween($min = 1, $max = 5);
    $imagePath  .= '.jpg';
    
    return $imagePath;
}

function createTitle(Faker $faker){
    $title = $faker->sentence($nbWords = 3, $variableNbWords = true);
    $title = substr($title, 0, -1);

    return $title;
}





