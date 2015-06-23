<?php

namespace codeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use codeCommerce\Http\Requests;
use codeCommerce\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct(){

        $this->middleware('guest');
    }
    public function index()
    {
        //

        return view('welcome');
    }

    public function exemplo(){
        $nome       = 'Maycon';
        $sobrenome  = 'Alexandre';
        return view('exemplo', compact('nome','sobrenome'));
    }
}
