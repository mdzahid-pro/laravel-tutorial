<?php

namespace App\Http\Controllers;

use App\Enum\RequestEnum;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        return view("request");
    }

    public function handle(Request $request){
        // file validation
        $data = $request->validate([
            "photo" => "mimes:png,jpg"
        ]);

        $allowedExtension = ["png", "jpg"];

        if(in_array($data["photo"]->extension(), $allowedExtension)){
            $filename = "zahid.png";
            $data["photo"]->storeAs("photos", $filename);
            $data["photo"]->store("photos");
        }


        dd($request->file("photo")->extension());

        dd($request->file("photo")->path());
        dd($request->file("photo")->isValid());
        dd($request->hasFile("photo"));
        dd($request->file("photo")->getClientOriginalExtension());
        dd($request->file("photo")->getClientOriginalName());
        dd($_FILES['photo']['tmp_name']);
//        $request->file("photo")->getMimeType()
    }
}
