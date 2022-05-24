<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Konsinyasi;


class HomeController extends Controller
{   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $persons = Person::with('items')->get();
        $konsinyasis = Konsinyasi::with('items')->get();
        return dd($konsinyasis[0]->items[0]->pivot->jumlah_konsinyasi);
        // return view('home', compact('persons', 'konsinyasis'));
    }
}
