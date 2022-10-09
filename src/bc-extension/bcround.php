<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

if (!\function_exists('bcround')) {
    function bcround(
        string $number,
        int $scale = 0,
    ): string {
        if (!\is_numeric($number)) {
            throw new \InvalidArgumentException('The number must be a numeric value.');
        }

        if (\mb_strpos($number, '.') !== false) {
            $number = \bcmul($number, '100', $scale);

            return (string) \bcdiv((string) \round((float) $number), '100', $scale);
        }

        return $number;
    }
}
