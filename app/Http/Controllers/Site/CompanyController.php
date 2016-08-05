<?php

namespace App\Http\Controllers\Site;


class CompanyController extends BaseController
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