<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function index(){
        print_r($this->request->get('name','hello'));
    }
}
