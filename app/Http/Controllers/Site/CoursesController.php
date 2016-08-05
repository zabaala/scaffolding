<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;



class CoursesController extends Controller
{
    /**
     * Override field in class Controller.
     * @var string
     */
    public $theme_actual_section = 'Cursos';

    /**
     * Override field in class Controller.
     * @var string
     */
    public $meta_title = 'Cursos | dot.Syntax';

    /**
     * Override field in class Controller.
     * @var string
     */
    public $meta_description = 'Os melhores cursos, num só lugar. Feito por nós, para você.';

    /**
     * Override field in class Controller.
     * @var bool
     */
    public $theme_show_courses = false;

    /**
     * Show the about company page.
     * @return mixed
     */
    public function index() {
        return $this->view('frontend.courses');
    }
}