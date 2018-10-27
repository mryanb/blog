<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [
        'posts' => [
            'path' => '{filename}',
            'author' => 'Ryan Bizance',
        ],
    ],
    'active' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'active' : '';
    },
];
