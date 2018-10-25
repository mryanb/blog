<?php

return [
    'baseUrl' => 'http://localhost:3000',
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
