<?php

namespace Appwrite;

class ID {
    public static function unique(): string
    {
        return 'unique()';
    }

    public static function custom(string $id): string
    {
        return $id;
    }
}