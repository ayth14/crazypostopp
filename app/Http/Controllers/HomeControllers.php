<?php

namespace App\Http\Controllers;

use App\Models\postlistings;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HomeControllers extends Controller
{
    public function index()
    {
        return view('home', [
            'posts' =>
            postlistings::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }

    public function postView(postlistings $postList)
    {
        return view('postView', [
            'post' => $postList
        ]);
    }

    public function create()
    {
        return view('postCreate');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => "required",
            'companyName' => ["required", Rule::unique('post_listings', 'companyName')],
            'location' => "required",
            'email' => "required|email",
            'logo' => "nullable",
            'tags' => "required",
            'description' => "required",
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        postlistings::create($formFields);


        return redirect("/")->with(['message' => 'Post Created Successfully', 'success' => true]);
    }

    public function postEdit(postlistings $postList){
        return view('postEdit', [
            'post' => $postList
        ]);
    }

    public function postUpdate(Request $request, postlistings $postList)
    {
        $formFields = $request->validate([
            'title' => "required",
            'companyName' => ["required"],
            'location' => "required",
            'email' => "required|email",
            'logo' => "nullable",
            'tags' => "required",
            'description' => "required",
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $postList->update($formFields);


        return back()->with(['message' => 'Post updated Successfully', 'success' => true]);
    }

    public function postDelete(postlistings $postList){
        $postList->delete();

        return redirect("/")->with(["message" => "Post deleted successfully", "success" => true]);
    }
}
