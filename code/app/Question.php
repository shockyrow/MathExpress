<?php

namespace App;

use App\Helpers\SearchHelper;
use App\Interfaces\SearchableModelInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Question
 *
 * @package App
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int|null $answer_id
 * @property int $view_count
 * @property User $user
 */
class Question extends Model implements SearchableModelInterface
{
    protected $fillable = [
        'title',
        'description',
        'answer_id',
    ];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Question
     */
    public function setId(int $id): Question
    {
        $this->id = $id;

        return $this;
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
     * @return Question
     */
    public function setTitle(string $title): Question
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
     * @return Question
     */
    public function setDescription(string $description): Question
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAnswerId(): ?int
    {
        return $this->answer_id;
    }

    /**
     * @param int|null $answer_id
     * @return Question
     */
    public function setAnswerId(?int $answer_id): Question
    {
        $this->answer_id = $answer_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getViewCount(): int
    {
        return $this->view_count;
    }

    /**
     * @param int $view_count
     * @return Question
     */
    public function setViewCount(int $view_count): Question
    {
        $this->view_count = $view_count;

        return $this;
    }

    /**
     * @param int $view_count
     * @return Question
     */
    public function addView(int $view_count = 1): Question
    {
        $this->view_count += $view_count;

        return $this;
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
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
