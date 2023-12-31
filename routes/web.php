<?php

use App\Core\Routing\Route;

use App\Middleware\Contract\BlockChrome;
use App\Middleware\Contract\BlockIE;


Route::get('/panel', 'PanelController@index', [Auth::class]);

Route::get('/', 'HomeController@index');

Route::get('/post/{slug}', 'PostController@single'); 
Route::get('/post/{slug}/comment/{cid}', 'PostController@comment');
Route::get('/product/{cid}', 'PostController@comment'); 

Route::get('/todo/list', 'TodoController@list', [BlockChrome::class, BlockIE::class]);
Route::get('/todo/add', 'TodoController@add');
Route::get('/todo/remove', 'TodoController@remove');

Route::get('/archive', 'ArchiveController@index');
Route::get('/archive/articles', 'ArchiveController@articles');
Route::get('/archive/products', 'ArchiveController@products');

Route::add(['get', 'post', 'put'], '/a', function () {
    echo "Welcom";
}); 


Route::get('/b', function () {
    view('archive.index');
});

Route::put('/c', ['Controller', 'Method']);
Route::get('/d', 'Controller@Method');
