<?php

namespace App\Http\Controllers;

use App\Models\postlistings;
use Illuminate\Http\Request;

class HomeControllers extends Controller
{
    public function index(){


        return view('home', [
            'heading' => 'Crazy-Post-Opp',
            'post' => postlistings::all()
        ]);
    }
    public function postView(postlistings $postList){
        return view('postView', [
            'post' => $postList
        ]);
    }
}
