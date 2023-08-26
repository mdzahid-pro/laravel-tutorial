<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
//        $this->middleware("ipcheck")->except("about");
    }

    public function index(){
        return "Return from index method of controller";
    }

    public function about(){
        return "Return from about method of controller";
    }
}
