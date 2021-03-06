<?php
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Tweet::class, function (Faker $faker) {
    return [
        'user_id'   => mt_rand(1, $GLOBALS['userCount']),
        'body'      => $faker->realText(mt_rand(30, 280))
    ];
});
