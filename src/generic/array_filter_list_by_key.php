<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

if (!\function_exists('array_filter_list_by_key')) {
    function array_filter_list_by_key(array $array, string $key): array
    {
        $blockedValues = [];

        foreach ($array as $arrayKey => $value) {
            if (!\is_array($value)) {
                continue;
            }

            if (!isset($value[$key])) {
                continue;
            }

            if (\in_array($value[$key], $blockedValues, true)) {
                unset($array[$arrayKey]);

                continue;
            }

            $blockedValues[] = $value[$key];
        }

        return $array;
    }
}
