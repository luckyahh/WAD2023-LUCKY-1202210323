<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function create(){
        return view('showroom/create');
    }
    public function store(Request $request){
        showroom::create([
            'nama_mobil' => $request -> nama_mobil,
            'brand_mobil' => $request -> brand_mobil,
            'warna_mobil' => $request -> warna_mobil,
            'tipe_mobil' => $request -> tipe_mobil,
            'harga_mobil' => $request -> harga_mobil
        ]);

        return redirect() ->route('showroom.index');

        public function index(){

            $showroom = showroom::all();

            return view('showroom.showroom', compact('showroom'));
        }
    }
}
