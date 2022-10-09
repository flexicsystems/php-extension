<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

if (!\function_exists('is_initialized')) {
    function is_initialized(object $object, string $property, bool $isNonPublicMember = false): bool
    {
        $reflection = new \ReflectionProperty($object, $property);

        if ($isNonPublicMember) {
            $reflection->setAccessible(true);
        }

        return $reflection->isInitialized($object);
    }
}
