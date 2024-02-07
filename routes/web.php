<?php

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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('test', function () {
//     return 'Welcome coders!';
// });

// Route::get('blog', function () {
//     return view('blog');
// });

// Route::get('hello-world', function () {
//     return view('hello-world');
// });

// Route::get('holi', function () {
//     return view('holi');
// });

Route::get('/', function () {
    return view('home');
}) -> name ('home');



Route::get('/blog', function () {
    $posts = [
        [
            'id' => 1,
            'titulo' => 'Hoy en nutriciones Loli',
            'contenido' => 'Lorem ipsum dolerem bla bla bla',
        ],
        [
            'id' => 2,
            'titulo' => 'Como evitar dormirte en clase',
            'contenido' => 'recuerda que comer espinacas es importante bla bla bla',
        ]
    ];
    return view('blog', ['posts'=> $posts]);
})-> name('blog');

Route::get('blog/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'titulo' => 'Hoy en nutriciones Loli',
            'contenido' => 'Lorem ipsum dolerem bla bla bla',
        ],
        [
            'id' => 2,
            'titulo' => 'Como evitar dormirte en clase',
            'contenido' => 'recuerda que comer espinacas es importante bla bla bla',
        ]
    ];
    $selectedPost = null;
    foreach($posts as $post){
        if ($post['id']== $slug){
            $selectedPost = $post;
        }
    }

    return view('post', ['post' => $selectedPost]);
}) -> name('post');