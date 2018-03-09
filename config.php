<?php

return [
    'baseUrl' => '',
    'production' => false,
    'pretty' => true,
    'collections' => [
        'docs' => [
            'path' =>'{filename}',
        ]
    ],
    'searchIndex' => file_get_contents(__DIR__ . '/source/_data/search-index.json'),
];
