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
//        dd($request->string("string_input")->trim()->upper()->value());
//        dd($request->boolean("boolean_input"));
//        dd($request->date("date_input")->format("Y-m-d"));
//        dd($request->float("numeric_input"));
//        dd($request->enum("enum_input", RequestEnum::class));

//        dd($request->has("has_input_two"));
//        dd($request->hasAny("has_input_two","has_input"));
//        $request->whenHas("has_input_two",function (){
//            dd("Has Input Method Found");
//        }, function (){
//            dd("Has input method not found");
//        });

//        dd($request->missing("has_input"));

//        dd($request->filled("string_input"));
    }
}
