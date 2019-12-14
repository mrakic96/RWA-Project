<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Dobrodošli u HobbyShop!';
        // return view('pages/index', compact('title'));
        return view('pages/index')->with('title', $title);
    }

    public function about(){
        
        $title = 'Nešto o nama!';
        return view('pages/about')->with('title', $title);
    }

    public function services(Request $request){
        $data = array(
            'title' => 'Naše usluge',
            'services'=> ['Prodaja', 'Narudžba']
        );
        return view('pages/services')->with($data);
    }
}
