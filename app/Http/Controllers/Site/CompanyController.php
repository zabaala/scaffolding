<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;



class CompanyController extends Controller
{
    /**
     * Override field in class Controller.
     * @var string
     */
    public $theme_actual_section = 'Institucional';

    

    /**
     * Show the about company page.
     * @return mixed
     */
    public function index() {
        return $this->view('frontend.company');
    }
}