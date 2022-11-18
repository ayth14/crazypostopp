<?php

namespace App\Http\Controllers;

use App\Models\postlistings;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HomeControllers extends Controller
{
    public function index(){
        return view('home', [
            'posts' =>
            postlistings::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }

    public function postView(postlistings $postList){
        return view('postView', [
            'post' => $postList
        ]);
    }

    public function create(){
        return view('postCreate');
    }

    public function store(Request $request){
        $validator = $request->validate([
            'title' => "required", 
            'companyName' => ["required", Rule::unique('post_listings', 'companyName')], 
            'location' => "required", 
            'email' => "required|email", 
            'logo' => "nullable", 
            'tags' => "required",
            'description' => "required", 
        ]);

        postlistings::create($validator);
        

        return redirect("/")->with(['message' => 'Post Created Successfully', 'success' => true]);
    }
}
