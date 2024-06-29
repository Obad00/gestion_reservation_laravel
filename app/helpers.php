<?php

use Illuminate\Routing\Route;

if (!function_exists('setActive')) {
    /**
     * Set the active class for the current route.
     *
     * @param array|string $route
     * @param string $class
     * @return string
     */
    function setActive($route, $class = 'active')
    {
        if (is_array($route)) {
            return in_array(Route::currentRouteName(), $route) ? $class : '';
        }
        return Route::currentRouteName() === $route ? $class : '';
    }
}
