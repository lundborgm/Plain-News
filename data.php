<?php

declare(strict_types=1);

// Array authors
$authors = [
    [
        'id' => 1,
        'name' => 'Mikaela Lundsgård',
    ],
    [
        'id' => 2,
        'name' => 'Jakob Fridmar',
    ],
    [
        'id' => 3,
        'name' => 'Victor Ljungblad',
    ],
    [
        'id' => 4,
        'name' => 'Maja Alin',
    ],
    [
        'id' => 5,
        'name' => 'Julia Karlsson',
    ],
];

// Array articles
$articles = [
    [
        'title' => 'Rubrik 1',
        'imgURL' => 'img/1.jpg',
        'content' => "Ante sint ipsum. Ligula diam non a rhoncus erat. Vivamus eros vitae urna vel vitae vitae a integer
                    elit sollicitudin pretium quisque sapien enim nisl pellentesque laoreet diam habitasse ultrices.
                    Nec suscipit ligula imperdiet ultrices in vestibulum nam tellus. Non nibh a ante est aenean. Diam nibh eu.
                    In eget leo dolor in lectus. Dui nibh odio rutrum semper ut. Lectus justo sit. Nunc risus nullam.
                    Placerat nec sem. Accumsan lectus consectetuer. Leo hendrerit semper natoque urna parturient vehicula amet.
                    Ac varius sit in pellentesque suscipit adipiscing. Felis sit platea. Maecenas aenean torquent pede cras purus.
                    Nec sit ac. Scelerisque egestas dolor. Vel laoreet neque. Ante odio nibh. Integer dui massa aliquam nunc molestie nulla nec facilisi.
                    Aliquam amet tellus autem est curae quis dui felis. Magna odio wisi. Id non ut eget in condimentum elit porta faucibus.
                    Mollis iaculis vel pellentesque adipiscing mauris. Sit nec donec et malesuada lectus.",
        'author' => $authors[0]['name'],
        'publishDate' => '2019-10-19',
        'likeCounter' => 41,
    ],
    [
        'title' => 'Rubrik 2',
        'imgURL' => 'img/1.jpg',
        'content' => "Ante sint ipsum. Ligula diam non a rhoncus erat. Vivamus eros vitae urna vel vitae vitae a integer
        elit sollicitudin pretium quisque sapien enim nisl pellentesque laoreet diam habitasse ultrices.
        Nec suscipit ligula imperdiet ultrices in vestibulum nam tellus. Non nibh a ante est aenean. Diam nibh eu.
        In eget leo dolor in lectus. Dui nibh odio rutrum semper ut. Lectus justo sit. Nunc risus nullam.
        Placerat nec sem. Accumsan lectus consectetuer. Leo hendrerit semper natoque urna parturient vehicula amet.
        Ac varius sit in pellentesque suscipit adipiscing. Felis sit platea. Maecenas aenean torquent pede cras purus.
        Nec sit ac. Scelerisque egestas dolor. Vel laoreet neque. Ante odio nibh. Integer dui massa aliquam nunc molestie nulla nec facilisi.
        Aliquam amet tellus autem est curae quis dui felis. Magna odio wisi. Id non ut eget in condimentum elit porta faucibus.
        Mollis iaculis vel pellentesque adipiscing mauris. Sit nec donec et malesuada lectus.",
        'author' => $authors[0]['name'],
        'publishDate' => '2019-10-18',
        'likeCounter' => 284,
    ],
    [
        'title' => 'Rubrik 3',
        'imgURL' => 'img/1.jpg',
        'content' => "Ante sint ipsum. Ligula diam non a rhoncus erat. Vivamus eros vitae urna vel vitae vitae a integer
        elit sollicitudin pretium quisque sapien enim nisl pellentesque laoreet diam habitasse ultrices.
        Nec suscipit ligula imperdiet ultrices in vestibulum nam tellus. Non nibh a ante est aenean. Diam nibh eu.
        In eget leo dolor in lectus. Dui nibh odio rutrum semper ut. Lectus justo sit. Nunc risus nullam.
        Placerat nec sem. Accumsan lectus consectetuer. Leo hendrerit semper natoque urna parturient vehicula amet.
        Ac varius sit in pellentesque suscipit adipiscing. Felis sit platea. Maecenas aenean torquent pede cras purus.
        Nec sit ac. Scelerisque egestas dolor. Vel laoreet neque. Ante odio nibh. Integer dui massa aliquam nunc molestie nulla nec facilisi.
        Aliquam amet tellus autem est curae quis dui felis. Magna odio wisi. Id non ut eget in condimentum elit porta faucibus.
        Mollis iaculis vel pellentesque adipiscing mauris. Sit nec donec et malesuada lectus.",
        'author' => $authors[1]['name'],
        'publishDate' => '2019-10-20',
        'likeCounter' => 59,
    ],
    [
        'title' => 'Rubrik 4',
        'imgURL' => 'img/1.jpg',
        'content' => "Ante sint ipsum. Ligula diam non a rhoncus erat. Vivamus eros vitae urna vel vitae vitae a integer
        elit sollicitudin pretium quisque sapien enim nisl pellentesque laoreet diam habitasse ultrices.
        Nec suscipit ligula imperdiet ultrices in vestibulum nam tellus. Non nibh a ante est aenean. Diam nibh eu.
        In eget leo dolor in lectus. Dui nibh odio rutrum semper ut. Lectus justo sit. Nunc risus nullam.
        Placerat nec sem. Accumsan lectus consectetuer. Leo hendrerit semper natoque urna parturient vehicula amet.
        Ac varius sit in pellentesque suscipit adipiscing. Felis sit platea. Maecenas aenean torquent pede cras purus.
        Nec sit ac. Scelerisque egestas dolor. Vel laoreet neque. Ante odio nibh. Integer dui massa aliquam nunc molestie nulla nec facilisi.
        Aliquam amet tellus autem est curae quis dui felis. Magna odio wisi. Id non ut eget in condimentum elit porta faucibus.
        Mollis iaculis vel pellentesque adipiscing mauris. Sit nec donec et malesuada lectus.",
        'author' => $authors[1]['name'],
        'publishDate' => '2019-10-22',
        'likeCounter' => 995,
    ],
    [
        'title' => 'Rubrik 5',
        'imgURL' => 'img/1.jpg',
        'content' => "Ante sint ipsum. Ligula diam non a rhoncus erat. Vivamus eros vitae urna vel vitae vitae a integer
        elit sollicitudin pretium quisque sapien enim nisl pellentesque laoreet diam habitasse ultrices.
        Nec suscipit ligula imperdiet ultrices in vestibulum nam tellus. Non nibh a ante est aenean. Diam nibh eu.
        In eget leo dolor in lectus. Dui nibh odio rutrum semper ut. Lectus justo sit. Nunc risus nullam.
        Placerat nec sem. Accumsan lectus consectetuer. Leo hendrerit semper natoque urna parturient vehicula amet.
        Ac varius sit in pellentesque suscipit adipiscing. Felis sit platea. Maecenas aenean torquent pede cras purus.
        Nec sit ac. Scelerisque egestas dolor. Vel laoreet neque. Ante odio nibh. Integer dui massa aliquam nunc molestie nulla nec facilisi.
        Aliquam amet tellus autem est curae quis dui felis. Magna odio wisi. Id non ut eget in condimentum elit porta faucibus.
        Mollis iaculis vel pellentesque adipiscing mauris. Sit nec donec et malesuada lectus.",
        'author' => $authors[2]['name'],
        'publishDate' => '2019-10-21',
        'likeCounter' => 369,
    ],
    [
        'title' => 'Rubrik 6',
        'imgURL' => 'img/1.jpg',
        'content' => "Ante sint ipsum. Ligula diam non a rhoncus erat. Vivamus eros vitae urna vel vitae vitae a integer
        elit sollicitudin pretium quisque sapien enim nisl pellentesque laoreet diam habitasse ultrices.
        Nec suscipit ligula imperdiet ultrices in vestibulum nam tellus. Non nibh a ante est aenean. Diam nibh eu.
        In eget leo dolor in lectus. Dui nibh odio rutrum semper ut. Lectus justo sit. Nunc risus nullam.
        Placerat nec sem. Accumsan lectus consectetuer. Leo hendrerit semper natoque urna parturient vehicula amet.
        Ac varius sit in pellentesque suscipit adipiscing. Felis sit platea. Maecenas aenean torquent pede cras purus.
        Nec sit ac. Scelerisque egestas dolor. Vel laoreet neque. Ante odio nibh. Integer dui massa aliquam nunc molestie nulla nec facilisi.
        Aliquam amet tellus autem est curae quis dui felis. Magna odio wisi. Id non ut eget in condimentum elit porta faucibus.
        Mollis iaculis vel pellentesque adipiscing mauris. Sit nec donec et malesuada lectus.",
        'author' => $authors[2]['name'],
        'publishDate' => '2019-10-17',
        'likeCounter' => 37,
    ],
    [
        'title' => 'Rubrik 7',
        'imgURL' => 'img/1.jpg',
        'content' => "Ante sint ipsum. Ligula diam non a rhoncus erat. Vivamus eros vitae urna vel vitae vitae a integer
        elit sollicitudin pretium quisque sapien enim nisl pellentesque laoreet diam habitasse ultrices.
        Nec suscipit ligula imperdiet ultrices in vestibulum nam tellus. Non nibh a ante est aenean. Diam nibh eu.
        In eget leo dolor in lectus. Dui nibh odio rutrum semper ut. Lectus justo sit. Nunc risus nullam.
        Placerat nec sem. Accumsan lectus consectetuer. Leo hendrerit semper natoque urna parturient vehicula amet.
        Ac varius sit in pellentesque suscipit adipiscing. Felis sit platea. Maecenas aenean torquent pede cras purus.
        Nec sit ac. Scelerisque egestas dolor. Vel laoreet neque. Ante odio nibh. Integer dui massa aliquam nunc molestie nulla nec facilisi.
        Aliquam amet tellus autem est curae quis dui felis. Magna odio wisi. Id non ut eget in condimentum elit porta faucibus.
        Mollis iaculis vel pellentesque adipiscing mauris. Sit nec donec et malesuada lectus.",
        'author' => $authors[3]['name'],
        'publishDate' => '2019-10-23',
        'likeCounter' => 98,
    ],
    [
        'title' => 'Rubrik 8',
        'imgURL' => 'img/1.jpg',
        'content' => "Ante sint ipsum. Ligula diam non a rhoncus erat. Vivamus eros vitae urna vel vitae vitae a integer
        elit sollicitudin pretium quisque sapien enim nisl pellentesque laoreet diam habitasse ultrices.
        Nec suscipit ligula imperdiet ultrices in vestibulum nam tellus. Non nibh a ante est aenean. Diam nibh eu.
        In eget leo dolor in lectus. Dui nibh odio rutrum semper ut. Lectus justo sit. Nunc risus nullam.
        Placerat nec sem. Accumsan lectus consectetuer. Leo hendrerit semper natoque urna parturient vehicula amet.
        Ac varius sit in pellentesque suscipit adipiscing. Felis sit platea. Maecenas aenean torquent pede cras purus.
        Nec sit ac. Scelerisque egestas dolor. Vel laoreet neque. Ante odio nibh. Integer dui massa aliquam nunc molestie nulla nec facilisi.
        Aliquam amet tellus autem est curae quis dui felis. Magna odio wisi. Id non ut eget in condimentum elit porta faucibus.
        Mollis iaculis vel pellentesque adipiscing mauris. Sit nec donec et malesuada lectus.",
        'author' => $authors[3]['name'],
        'publishDate' => '2019-10-24',
        'likeCounter' => 100,
    ],
    [
        'title' => 'Rubrik 9',
        'imgURL' => 'img/1.jpg',
        'content' => "Ante sint ipsum. Ligula diam non a rhoncus erat. Vivamus eros vitae urna vel vitae vitae a integer
        elit sollicitudin pretium quisque sapien enim nisl pellentesque laoreet diam habitasse ultrices.
        Nec suscipit ligula imperdiet ultrices in vestibulum nam tellus. Non nibh a ante est aenean. Diam nibh eu.
        In eget leo dolor in lectus. Dui nibh odio rutrum semper ut. Lectus justo sit. Nunc risus nullam.
        Placerat nec sem. Accumsan lectus consectetuer. Leo hendrerit semper natoque urna parturient vehicula amet.
        Ac varius sit in pellentesque suscipit adipiscing. Felis sit platea. Maecenas aenean torquent pede cras purus.
        Nec sit ac. Scelerisque egestas dolor. Vel laoreet neque. Ante odio nibh. Integer dui massa aliquam nunc molestie nulla nec facilisi.
        Aliquam amet tellus autem est curae quis dui felis. Magna odio wisi. Id non ut eget in condimentum elit porta faucibus.
        Mollis iaculis vel pellentesque adipiscing mauris. Sit nec donec et malesuada lectus.",
        'author' => $authors[4]['name'],
        'publishDate' => '2019-10-16',
        'likeCounter' => 56,
    ],
    [
        'title' => 'Rubrik 10',
        'imgURL' => 'img/1.jpg',
        'content' => "Ante sint ipsum. Ligula diam non a rhoncus erat. Vivamus eros vitae urna vel vitae vitae a integer
        elit sollicitudin pretium quisque sapien enim nisl pellentesque laoreet diam habitasse ultrices.
        Nec suscipit ligula imperdiet ultrices in vestibulum nam tellus. Non nibh a ante est aenean. Diam nibh eu.
        In eget leo dolor in lectus. Dui nibh odio rutrum semper ut. Lectus justo sit. Nunc risus nullam.
        Placerat nec sem. Accumsan lectus consectetuer. Leo hendrerit semper natoque urna parturient vehicula amet.
        Ac varius sit in pellentesque suscipit adipiscing. Felis sit platea. Maecenas aenean torquent pede cras purus.
        Nec sit ac. Scelerisque egestas dolor. Vel laoreet neque. Ante odio nibh. Integer dui massa aliquam nunc molestie nulla nec facilisi.
        Aliquam amet tellus autem est curae quis dui felis. Magna odio wisi. Id non ut eget in condimentum elit porta faucibus.
        Mollis iaculis vel pellentesque adipiscing mauris. Sit nec donec et malesuada lectus.",
        'author' => $authors[4]['name'],
        'publishDate' => '2019-10-25',
        'likeCounter' => 72,
    ],
];
