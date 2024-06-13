<?php

return [

    'defaults' => [
        'guard' => 'admin',
        'passwords' => 'admins',
    ],

    'guards' => [
        'admin' => [ 
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'instructor' => [
            'driver' => 'session',
            'provider' => 'instructors',
        ],
        'student' => [
            'driver' => 'session',
            'provider' => 'students',
        ],
    ],

    'passwords' => [
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'instructors' => [
            'provider' => 'instructors',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'students' => [
            'provider' => 'students',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'providers' => [
        'admins' => [
            'driver' => 'eloquent',
            'model' => \Modules\Admin\Entities\Model::class,
        ],
        'instructors' => [
            'driver' => 'eloquent',
            'model' => \Modules\Instructor\Entities\Model::class,
        ],
        'students' => [
            'driver' => 'eloquent',
            'model' => \Modules\Student\Entities\Model::class,
        ],
    ],

    'password_timeout' => 10800,

];
