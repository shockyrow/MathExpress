<?php
declare(strict_types=1);

namespace App\Interfaces;

use App\Helpers\SearchHelper;

interface SearchableModelInterface
{
    public static function search(string $key = null, int $searchType = SearchHelper::SEARCH_TYPE_CONTAINS);
}