<?php

namespace App\Providers;

use Roots\Acorn\Sage\SageServiceProvider;

class ContentHelperProvider extends SageServiceProvider
{
    public function register()
    {
        $this->app->singleton('excerpt', function () {
            return function ($content, $limit = 20) {
                $words = explode(' ', strip_tags($content));
                if (count($words) <= $limit) {
                    return implode(' ', $words);
                }

                return implode(' ', array_slice($words, 0, $limit)) . '...';
            };
        });
    }

    public function boot()
    {
        //
    }
}
