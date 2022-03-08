<?php

use Laravel\Lumen\Routing\UrlGenerator;

if (! function_exists('urlGenerator')) {
    /**
     * @return \Laravel\Lumen\Routing\UrlGenerator
     */
    function urlGenerator(): UrlGenerator
    {
        return new UrlGenerator(app());
    }
}

if (! function_exists('asset')) {
    /**
     * @param $path
     * @param bool $secured
     *
     * @return string
     */
    function asset($path, $secured = false): string
    {
        return urlGenerator()->asset($path, $secured);
    }
}
