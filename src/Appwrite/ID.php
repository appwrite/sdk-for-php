<?php

namespace Appwrite;

class ID {
    public static function unique(int $padding = 7): string
    {
        $uniqid = \uniqid();

        if ($padding > 0) {
            $bytes = \random_bytes(\max(1, (int)\ceil(($padding / 2)))); // one byte expands to two chars
            $uniqid .= \substr(\bin2hex($bytes), 0, $padding);
        }

        return $uniqid;
    }

    public static function custom(string $id): string
    {
        return $id;
    }
}
