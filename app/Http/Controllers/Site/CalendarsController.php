<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


class CalendarsController extends Controller
{
    /**
     * Override field in class Controller.
     * @var string
     */
    public $theme_actual_section = 'Calendário';

    /**
     * Override field in class Controller.
     * @var string
     */
    public $meta_title = 'Calendário de Cursos | dot.Syntax';

    /**
     * Override field in class Controller.
     * @var string
     */
    public $meta_description = 'Confira a data de início dos nossos próximos cursos.';

    /**
     * Show the about company page.
     * @return mixed
     */
    public function index() {
        return $this->view('frontend.calendars');
    }
}