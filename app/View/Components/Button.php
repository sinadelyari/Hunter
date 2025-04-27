<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $title;
    public $url;

    public $svg;

    public $classes;

    public function __construct($title,$url,$svg = null,$classes = null)
    {
        $this->title = $title;
        $this->url = $url;
        $this->svg = $svg;
        $this->classes = $classes;
    }

    public function render()
    {
        return view('components.button');
    }
}
