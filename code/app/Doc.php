<?php

namespace App;

use App\Helpers\SearchHelper;
use App\Interfaces\SearchableModelInterface;
use Illuminate\Database\Eloquent\Model;
use function Sodium\library_version_major;

/**
 * Class Doc
 *
 * @package App
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $description
 * @property string|null $thumbnail
 * @property string $filename
 */
class Doc extends Model implements SearchableModelInterface
{
    protected $fillable = [
        'title',
        'author',
        'description',
        'thumbnail',
        'filename'
    ];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Doc
     */
    public function setTitle(string $title): Doc
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @return Doc
     */
    public function setAuthor(string $author): Doc
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Doc
     */
    public function setDescription(string $description): Doc
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    /**
     * @param string|null $thumbnail
     * @return Doc
     */
    public function setThumbnail(?string $thumbnail): Doc
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return Doc
     */
    public function setFilename(string $filename): Doc
    {
        $this->filename = $filename;

        return $this;
    }

    public static function search(string $key = null, int $searchType = SearchHelper::SEARCH_TYPE_CONTAINS)
    {
        if ($key === null) {
            return self::where();
        } else {
            $query = SearchHelper::getSearchQuery($key, $searchType);

            return self::where('title', 'like', $query)
                ->orWhere('author', 'like', $query)
                ->orWhere('description', 'like', $query)
            ;
        }
    }
}
