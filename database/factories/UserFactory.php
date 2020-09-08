<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'FirstName' => 'Hosein',
        'LastName' => 'Normohamadi',
        'PhoneNumber' => '09301040145',
        'CodeMeli' => '0481048731',
        'Image' => '/assets/img/default-avatar.png',
        'email' => 'info@hoseinatashgah.ir',
        'password' => Hash::make('12345678'),
    ];
});
