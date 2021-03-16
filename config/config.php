<?php

/*
 * You can place your custom package configuration in here.
 */
return [

    'prefix' => '',

    'key' => 'name',

    'field' => [
        'error' => [
            'class' => 'border border-red-500'
        ]
    ],

    'error' => [
        'class' => 'border border-red-500'
    ],


    'input' => [
        'class' => 'mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full',
        'class_error' => 'border border-red-500',

        'label' => [
            'class' => 'block font-medium text-sm text-gray-700',
        ],

        'error' => [
            'class' => 'mt-2 text-sm text-red-600'
        ],
    ]

];
