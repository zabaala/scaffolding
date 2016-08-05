<?php

namespace App\Http\Controllers\Site;


class HomeController extends BaseController
{
    /**
     * Show dotSyntax homepage.
     * @return mixed
     */
    public function index() {
        return $this->view('frontend.index');
    }
}