<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use Illuminate\Http\Request;

class MembresController extends Controller
{
    public function create(){
        return view('welcome');
    }

    public function store(Request $request){
        $store = new Membres;
        $store->age= $request->age;
        $store->nom = $request->nom;
        $store->genre = $request->genre;
        $store->save();
        return redirect()->back();
    }

    public function destroy($id){
        $destroy= Membres::find($id);
        $destroy->delete();
        return redirect('/');
    }
}
