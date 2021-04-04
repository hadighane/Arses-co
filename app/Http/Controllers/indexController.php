<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = [
            '$pagetitle' => 'Arses Co.'
        ];
        return view('front.index', $data);
    }
}
