<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;



class CompanyController extends Controller
{
    /**
     * Show the about company page.
     * @return Reponse
     */
    public function index() {
        return view('frontend.company', ['title'=>'Institucional']);
    }
}