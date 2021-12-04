<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\NBPAPI;

class NBP extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('welcome', ['nbpapi' => '']);
    }

    public function update(NBPAPI $nbpapi)
    {
        $nbpapi->getData();
        return redirect('/');
    }

}
