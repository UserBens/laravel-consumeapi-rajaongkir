<?php

use App\Http\Controllers\OngkirController;
use Illuminate\Support\Facades\Http;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list-provinsi', function () {
    $response = Http::withHeaders([
        'key' => '04f2294c1ff50fc8b1906080f8d9cafc'
    ])->get('https://api.rajaongkir.com/starter/province');

    $status = $response->json()['rajaongkir']['status']['code'];
    $provinsi = $response->json()['rajaongkir']['results'];

    // dd($response->json()['rajaongkir']['results']);

    dd($provinsi);
});

Route::get('/list-kota', function () {
    $response = Http::withHeaders([
        'key' => '04f2294c1ff50fc8b1906080f8d9cafc'
    ])->get('https://api.rajaongkir.com/starter/city');

    $city = $response->json()['rajaongkir']['results']; 

    dd($city);
    // dd($response->json()['rajaongkir']['results']);
});

Route::get('/cek-ongkir', [OngkirController::class, 'index']);
