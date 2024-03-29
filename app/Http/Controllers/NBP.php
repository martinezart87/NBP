<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Services\NBPAPI;
use App\Models\Currency;
use Illuminate\Support\Facades\Redirect;

class NBP extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('welcome', ['nbpapi' => Currency::all()]);
    }

    public function update(NBPAPI $nbpapi)
    {
        $data = $nbpapi->getData();
        return redirect('/')->with('message', $data);
        // return redirect('/');
    }

}
