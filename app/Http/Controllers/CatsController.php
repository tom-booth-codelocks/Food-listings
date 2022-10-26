<?php

namespace App\Http\Controllers;

use App\Models\Cats;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Request;

class CatsController extends Controller
{
    // Show all cats
    public function index(Request $request) 
    {
        
        $aDataContent = [];
        if (request(["search"]))
        {
            $aDataContent["search"] = request("search");
        }
        $aDataContent['cats'] = Cats::latest()->Filter(request(["tag", "search"]))->get();
        return view("cats.index", $aDataContent);  
    }
    
    // sShow single listing
    public function show(Cats $cat) 
    {
        return view("cats.show", [
            "cat" => $cat
        ]);
    }

    // show create form
    public function create()
    {   
        return view("cats.create");
    }

    //store listing data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            "name" => "required",
            "type" => "required",
            "address" => "required",
            "tags" => "required",
            "description" => "required",
            "rating" => "required",
        ]);
        
        Cats::create($formFields);
        return redirect("/")->with("message", "Cat has been added to the directory uwu");
    }
}

    
