<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Authors:
 * - Josh Soref
 * - Huáng Jùnliàng
 * - François B
 * - Iskren Chernev
 * - JD Isaacks
 */
return [
    'year' => 'ஒரு வருடம்|:count ஆண்டுகள்',
    'month' => 'ஒரு மாதம்|:count மாதங்கள்',
    'week' => 'ஒரு வாரம்|:count வாரங்கள்',
    'day' => 'ஒரு நாள்|:count நாட்கள்',
    'hour' => 'ஒரு மணி நேரம்|:count மணி நேரம்',
    'minute' => 'ஒரு நிமிடம்|:count நிமிடங்கள்',
    'second' => 'ஒரு சில விநாடிகள்|:count விநாடிகள்',
    'ago' => ':time முன்',
    'from_now' => ':time இல்',
    'diff_yesterday' => 'நேற்று',
    'diff_tomorrow' => 'நாளை',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY, HH:mm',
        'LLLL' => 'dddd, D MMMM YYYY, HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[இன்று] LT',
        'nextDay' => '[நாளை] LT',
        'nextWeek' => 'dddd, LT',
        'lastDay' => '[நேற்று] LT',
        'lastWeek' => '[கடந்த வாரம்] dddd, LT',
        'sameElse' => 'L',
    ],
    'ordinal' => ':numberவது',
    'meridiem' => function ($hour, $minute, $isLower) {
        if ($hour < 2) {
            return ' யாமம்';
        }
        if ($hour < 6) {
            return ' வைகறை';
        }
        if ($hour < 10) {
            return ' காலை';
        }
        if ($hour < 14) {
            return ' நண்பகல்';
        }
        if ($hour < 18) {
            return ' எற்பாடு';
        }
        if ($hour < 22) {
            return ' மாலை';
        }

        return ' யாமம்';
    },
    'months' => ['ஜனவரி', 'பிப்ரவரி', 'மார்ச்', 'ஏப்ரல்', 'மே', 'ஜூன்', 'ஜூலை', 'ஆகஸ்ட்', 'செப்டெம்பர்', 'அக்டோபர்', 'நவம்பர்', 'டிசம்பர்'],
    'months_short' => ['ஜனவரி', 'பிப்ரவரி', 'மார்ச்', 'ஏப்ரல்', 'மே', 'ஜூன்', 'ஜூலை', 'ஆகஸ்ட்', 'செப்டெம்பர்', 'அக்டோபர்', 'நவம்பர்', 'டிசம்பர்'],
    'weekdays' => ['ஞாயிற்றுக்கிழமை', 'திங்கட்கிழமை', 'செவ்வாய்கிழமை', 'புதன்கிழமை', 'வியாழக்கிழமை', 'வெள்ளிக்கிழமை', 'சனிக்கிழமை'],
    'weekdays_short' => ['ஞாயிறு', 'திங்கள்', 'செவ்வாய்', 'புதன்', 'வியாழன்', 'வெள்ளி', 'சனி'],
    'weekdays_min' => ['ஞா', 'தி', 'செ', 'பு', 'வி', 'வெ', 'ச'],
    'first_day_of_week' => 0,
    'day_of_first_week_of_year' => 1,
];
