<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    // Default options for our archives
    'archive' => [

    ],

    // Default options for files added
    'file' => [
        'method' => env('ZIPSTREAM_FILE_METHOD', 'deflate'),

        'deflate' => env('ZIPSTREAM_FILE_DEFLATE'),
    ],

    'aws' => [
        'region' => env('ZIPSTREAM_AWS_REGION', env('AWS_DEFAULT_REGION', 'us-east-1'))
    ]
];