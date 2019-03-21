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
 * @property string|null $video
 * @property string|null $audio
 * @property string|null $presentation
 */
class Module extends Model implements SearchableModelInterface
{
    protected $fillable = [
        'title',
        'professor',
        'thumbnail',
        'description',
        'presentation',
        'video',
        'audio'
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
     * @return string|null
     */
    public function getVideo(): ?string
    {
        return $this->video;
    }

    /**
     * @param string|null $video
     * @return Module
     */
    public function setVideo(?string $video): Module
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAudio(): ?string
    {
        return $this->audio;
    }

    /**
     * @param string|null $audio
     * @return Module
     */
    public function setAudio(?string $audio): Module
    {
        $this->audio = $audio;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    /**
     * @param string|null $presentation
     * @return Module
     */
    public function setPresentation(?string $presentation): Module
    {
        $this->presentation = $presentation;
        return $this;
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
