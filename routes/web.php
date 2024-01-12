<?php

use App\Http\Controllers\PlanetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello', function () {
    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];
    
    return view('planets')->with(['planets' => $planets]);
});

Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});

Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{id}', [PlanetController::class, 'show']);

Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
    return 'post'.$postId. 'post'. $commentId;
});