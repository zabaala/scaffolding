<?php

namespace App\Http\Controllers\Site;


class CoursesController extends BaseController
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

    /**
     * Show course details page.
     * @param $slug
     * @return mixed
     */
    public function details($slug) {
        $this->meta_title = 'Curso: ' . $slug;
        $this->theme_show_courses = true;

        return $this->view('frontend.course');
    }
}