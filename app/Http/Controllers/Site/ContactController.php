<?php

namespace App\Http\Controllers\Site;


class ContactController extends BaseController
{
    /**
     * Override field in class Controller.
     * @var string
     */
    public $theme_actual_section = 'Fale conosco';

    /**
     * Override field in class Controller.
     * @var string
     */
    public $meta_title = 'Fale Conosco | dot.Syntax';

    /**
     * Override field in class Controller.
     * @var string
     */
    public $meta_description = 'Dúvidas, críticas ou sugestões? Entre em contato conosco.';

    /**
     * Show the about company page.
     * @return mixed
     */
    public function index() {
        return $this->view('frontend.contact');
    }
}