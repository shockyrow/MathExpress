<?php
declare(strict_types=1);

namespace App\Interfaces;

interface SearchableModelInterface
{
    public static function search(string $key = null);
}