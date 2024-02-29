<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OngkirController extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'key' => '04f2294c1ff50fc8b1906080f8d9cafc'
        ])->get('https://api.rajaongkir.com/starter/city');

        $city = $response['rajaongkir']['results'];

        return view('cek-ongkir', [
            'city' => $city,
            'ongkir' => ''
        ]);
    }

    public function cekOngkir(Request $request)
    {
        $response = Http::withHeaders([
            'key' => '04f2294c1ff50fc8b1906080f8d9cafc'
        ])->get('https://api.rajaongkir.com/starter/city');

        $responseCost = Http::withHeaders([
            'key' => '04f2294c1ff50fc8b1906080f8d9cafc'
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => $request->origin,
            'destination' => $request->destination,
            'weight' => $request->weight,
            'courier' => $request->courier,
        ]);

        $city = $response['rajaongkir']['results'];
        $ongkir = $responseCost['rajaongkir'];

        return view('cek-ongkir', [
            'city' => $city,
            'ongkir' =>$ongkir
        ]);
    }
}
