<?php

// config for Thora/Site
return [
	'options' => [
		'www' => 'bulma',
		'www1' => 'balad',
		'www2' => 'original',
		'www4' => 'null',
		'web' => 'bulma',
	],
    /*
    |--------------------------------------------------------------------------
    | Default Active Theme
    |--------------------------------------------------------------------------
    |
    | It will assign the default active theme to be used if one is not set during
    | runtime.
    */
    'active' => 'bulma',
    //'active' => 'balad',
    //'active' => 'original',
    //'active' => null,

    /*
    |--------------------------------------------------------------------------
    | Parent Theme
    |--------------------------------------------------------------------------
    |
    | This is a parent theme for the theme specified in the active config
    | option. It works like the WordPress style theme hierarchy, if the blade
    | file is not found in the currently active theme, then it will look for it
    | in the parent theme.
    */
    'parent' => null,

    /*
    |--------------------------------------------------------------------------
    | Base Path
    |--------------------------------------------------------------------------
    |
    | The base path where all the themes are located.
    */
    'base_path' => base_path('vendor'.DIRECTORY_SEPARATOR.'Thora'.DIRECTORY_SEPARATOR.'Site'.DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'templates')

];
