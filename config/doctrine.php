<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mapping driver to use
    |--------------------------------------------------------------------------
    |
    | TODO: Write this
    |
    */

    'mapping'    => 'annotations',

    /*
    |--------------------------------------------------------------------------
    | Entity paths
    |--------------------------------------------------------------------------
    |
    | TODO: Write this
    |
    */

    'paths'      => [ 'app/Models' ],

    /*
    |--------------------------------------------------------------------------
    | Custom types
    |--------------------------------------------------------------------------
    |
    | TODO: Write this
    |
    */

    'types'      => [ ],

    /*
    |--------------------------------------------------------------------------
    | Proxy configuration
    |--------------------------------------------------------------------------
    |
    | TODO: Write this
    |
    */

    'proxy'      => [
        'auto_generate' => true,
        'directory'     => 'storage/app/doctrine-proxies',
        'namespace'     => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Repository class
    |--------------------------------------------------------------------------
    |
    | TODO: Write this
    |
    */

    'repository' => null,

    /*
    |--------------------------------------------------------------------------
    | Logger class
    |--------------------------------------------------------------------------
    |
    | TODO: Write this
    |
    */

    'logger'     => null,

];
