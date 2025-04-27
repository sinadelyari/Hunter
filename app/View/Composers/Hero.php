<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Hero extends Composer
{
    protected static $views = [
        'sections.hero',
    ];

    public function with()
    {
        $hero = get_field('hero');

        return [
            'hero_title' => $hero['title'] ?? '',
            'hero_subtitle' => $hero['subtitle'] ?? '',
            'hero_background' => $hero['background'] ?? '',
        ];
    }
}
