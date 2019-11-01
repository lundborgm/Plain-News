<?php

declare(strict_types=1);

/**
 * Function that sorts by date.
 *
 * @param array $a
 * @param array $b
 *
 * @return int
 *
 */
function sortByDate(array $a, array $b): int {
    return strtotime($b['publishDate']) - strtotime($a['publishDate']);
}
