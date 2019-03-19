<?php
declare(strict_types=1);

namespace App\Helpers;

abstract class SearchHelper
{
    const SEARCH_TYPE_BEGINS_WITH = 1;
    const SEARCH_TYPE_CONTAINS = 2;
    const SEARCH_TYPE_ENDS_WITH = 3;

    public static function getSearchQuery(string $key, int $searchType = self::SEARCH_TYPE_CONTAINS): string
    {
        $query = $key;

        switch ($searchType) {
            case SearchHelper::SEARCH_TYPE_BEGINS_WITH:
                $query .= '%';
                break;
            case SearchHelper::SEARCH_TYPE_CONTAINS:
                $query = '%' . $query . '%';
                break;
            case SearchHelper::SEARCH_TYPE_ENDS_WITH:
                $query = '%' . $query;
                break;
            default:
                $query = '%' . $query . '%';
                break;
        }

        return $query;
    }
}