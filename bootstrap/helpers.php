<?php
if (! function_exists('route_class')) {
    function route_class()
    {
        return Route::currentRouteName();
        return str_replace('.', '-', Route::currentRouteName());
    }
}
