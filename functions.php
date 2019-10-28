<?php

declare(strict_types=1);
require __DIR__.'/data.php';

/**
 *
 *
 */
function sortByDate(array $a, array $b): int {
    return strtotime($b['publishDate']) - strtotime($a['publishDate']);
}
