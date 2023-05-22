<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', function () {
    return '안녕하세요.';
});

Route::get('/myview', function () {
    return view('myview');
});

//METHOD

Route::get('/method', function () {
    return 'GET METHOOD';
});

// ANY METHOD 사용시 주의 : 
// 위치에 따라 그 위에 있는 모든 method는 any로 감.
Route::any('/method', function () {
    return 'any METHOOD';
}); 
Route::get('/home', function () {
    return view('home');
});
Route::post('/method', function () {
    return 'POST METHOOD';
});
Route::put('/method', function () {
    return 'PUT METHOOD';
});
Route::delete('/method', function () {
    return 'delete METHOOD';
});
// Route::any('/method', function () {
//     return 'any METHOOD';
// });

//any가 최하단에 있어도 얘가 처리됨.
Route::match(['get','post'],'/method', function () {
    return 'match METHOOD';
});

Route::get('/query', function (Request $request)
{
    return "id : ".$request->id." name : ".$request->name;
});

Route::get('/segment/{id}', function ($id) {
    return "/segment/{id} : ".$id;
});


// Route::get('/segmentDefault/{id?}', function ($id = 'base') {
//     return "/segmentDefault/{id?} id = 'base' : " . $id;
// });

Route::get('/segmentDefault/{id?}', function (Request $request) {
    return "segmentDefault request id : " . $request->id;
});






Route::get('/naming/home', function () {
    return view('/naminghome');
});

Route::get('/naming', function () {
    return '->name("naming.index") : name as naming';
})->name('naming.index');

Route::fallback(function ()
{
    return '잘못된 경로입니다. 다시 확인해 주세요.';
});

Route::prefix('users')->group(function ()
{
    Route::get('/login', function () {
        return 'login';
    });

    Route::get('/logout', function () {
        return 'logout';
    });

    Route::get('/resistration', function () {
        return 'resistration';
    });
});


Route::get('/makesign', function () {
    $baseUrl = route('sign');
    $signUrl = URL::signedRoute('sign');
    $limitSignUrl = URL::temporarySignedRoute('sign', now()->addSecond(20));
    return $baseUrl."<br>". $signUrl. "<br>". $limitSignUrl;
});

Route::get('/sign', function () {
    return 'sign';
})->name('sign')->middleware('signed');