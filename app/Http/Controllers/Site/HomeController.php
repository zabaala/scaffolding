<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    /**
     * Show dotSyntax homepage.
     * @return Reponse
     */
    public function index() {
        return $this->view('frontend.index');
    }
}