<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    /**
     * The frontend metatag title.
     * @var string
     */
    public $meta_title = 'dot.Syntax';

    /**
     * The content for description metatag.
     * @var string
     */
    public $meta_description = 'Cursos online feito por nós, para você!';

    /**
     * The page section name of live page.
     * @var string
     */
    public $theme_actual_section = '';

    /**
     * Define if footer courses list has been showed.
     * @var bool
     */
    public $theme_show_courses = true;

    /**
     * @param null $view
     * @param array $data
     * @param array $mergeData
     * @return mixed
     */
    protected function view($view = null, $data = [], $mergeData = []) {
        $mergeData = array_merge($mergeData, $this->defaultMetaData());
        return view($view, $data, $mergeData);
    }

    /**
     * Generate a array with default data to be passed to templates & views.
     * @return array
     */
    final private function defaultMetaData() {
        return [
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'theme_actual_section' => $this->theme_actual_section,
            'theme_show_courses' => $this->theme_show_courses
        ];
    }
}