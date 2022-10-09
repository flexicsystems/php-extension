<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

if (!\function_exists('midpoint')) {
    function midpoint(
        float $x1,
        float $x2,
        float $y1,
        float $y2,
    ): array {
        return [($x1 + $x2) / 2, ($y1 + $y2) / 2];
    }
}
