<?php

use App\Http\Controllers\MembresController;
use App\Models\Membres;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    $membres = Membres::all();
    return view('welcome', compact('membres'));
});
Route::get('/femmes', function () {
    $femmes = DB::select('SELECT * FROM membres WHERE genre ="femmes"');
    return view('pages.femmes', compact('femmes'));
});

Route::get('/hommes', function () {
    $hommes = DB::table('membres')
    ->where('genre', 'hommes')
    ->take(15)
    ->get();
    return view('pages.homme', compact('hommes'));
});
Route::get('/welcome', [MembresController::class, 'create']);

Route::post('/membrespost',[MembresController::class,'store']);
Route::delete('/membresdelete/{id}',[MembresController::class,'destroy']);
