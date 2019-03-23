<?php

namespace App;

use App\Helpers\SearchHelper;
use App\Interfaces\SearchableModelInterface;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Module
 * @package App
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $user_id
 * @property string|null $thumbnail
 * @property string|null $filename
 */
class Module extends Model implements SearchableModelInterface
{
    protected $fillable = [
        'title',
        'professor',
        'thumbnail',
        'description',
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
     * @return Module
     */
    public function setTitle(string $title): Module
    {
        $this->title = $title;
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
     * @return Module
     */
    public function setDescription(string $description): Module
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     * @return Module
     */
    public function setUserId(int $user_id): Module
    {
        $this->user_id = $user_id;

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
     * @return Module
     */
    public function setThumbnail(?string $thumbnail): Module
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return Module
     */
    public function setFilename(string $filename): Module
    {
        $this->filename = $filename;
        return $this;
    }



    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function search(string $key = null, int $searchType = SearchHelper::SEARCH_TYPE_CONTAINS)
    {
        if ($key === null) {
            return self::where();
        } else {
            $query = SearchHelper::getSearchQuery($key, $searchType);

            return self::where('title', 'like', $query)
                ->orWhere('description', 'like', $query)
            ;
        }
    }
}
