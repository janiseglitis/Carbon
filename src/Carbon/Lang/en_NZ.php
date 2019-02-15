<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return array_replace_recursive(require __DIR__.'/en.php', [
    'year' => 'a year|:count years',
    'month' => 'a month|:count months',
    'week' => 'a week|:count weeks',
    'day' => 'a day|:count days',
    'hour' => 'an hour|:count hours',
    'minute' => 'a minute|:count minutes',
    'second' => 'a few seconds|:count seconds',
    'from_now' => 'in :time',
    'formats' => [
        'LT' => 'h:mm A',
        'LTS' => 'h:mm:ss A',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY h:mm A',
        'LLLL' => 'dddd, D MMMM YYYY h:mm A',
    ],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,
]);