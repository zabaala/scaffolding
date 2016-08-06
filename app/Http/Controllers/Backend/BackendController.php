<?php

namespace App\Http\Controllers\Backend;

use App\Banner;

class BackendController extends BaseController
{
    /**
     * Show default view for backend.
     * @return mixed
     */
    public function index() {
        return view('backend.default.index');
    }
}