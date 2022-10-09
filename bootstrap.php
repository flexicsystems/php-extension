<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

return (static function (): void {
    $extensions = [
        'generic' => [
            'is_initialized',
            'array_filter_list_by_key',
            'midpoint',
        ],
        'data-type' => [
            'is_uuid',
        ],
        'bc-extension' => [
            'bcround',
        ],
    ];

    foreach ($extensions as $extension => $functions) {
        foreach ($functions as $function) {
            if (!\function_exists($function)) {
                require_once \sprintf('%s/src/%s/%s.php', __DIR__, $extension, $function);
            }
        }
    }
})();
