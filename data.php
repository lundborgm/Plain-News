<?php

declare(strict_types=1);

$authors = [
    [
        'id' => 0,
        'name' => 'Mikaela Lundsgård',
        'imageURL' => '',
    ],
    [   'id' => 1,
        'name' => 'Jakob Fridmar',
        'imageURL' => '',
    ],
    [   'id' => 2,
        'name' => 'Victor Ljungblad',
        'imageURL' => '',
    ],
    [   'id' => 3,
        'name' => 'Maja Alin',
        'imageURL' => '',
    ],
    [   'id' => 4,
        'name' => 'Julia Karlsson',
        'imageURL' => '',
    ],
];

$articles = [
    [   'id' => 1,
        'title' => 'Lorem Ipsum',
        'content' => 'blablablaaa',
        'author' => $authors[1]['name'],
        'publishDate' => '2019-10-23',
        'likeCounter' => 1337,
    ],
];

print_r($authors[2]['name']);
