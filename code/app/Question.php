<?php

namespace App;

use App\Interfaces\SearchableModelInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Question
 * @package App
 * @property string $title
 * @property string $description
 * @property string $tags
 * @property int $answerCount
 * @property int $viewCount
 * @property boolean $isAnswered
 */
class Question extends Model implements SearchableModelInterface
{
    protected $fillable = [
        'title',
        'description',
        'tags',
        'answerCount',
        'viewCount',
        'isAnswered'
    ];

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
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
     * @return string
     */
    public function getTags(): string
    {
        return $this->tags;
    }

    /**
     * @param string $tags
     * @return Question
     */
    public function setTags(string $tags): Question
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return int
     */
    public function getAnswerCount(): int
    {
        return $this->answerCount;
    }

    /**
     * @param int $answerCount
     * @return Question
     */
    public function setAnswerCount(int $answerCount): Question
    {
        $this->answerCount = $answerCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    /**
     * @param int $viewCount
     * @return Question
     */
    public function setViewCount(int $viewCount): Question
    {
        $this->viewCount = $viewCount;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAnswered(): bool
    {
        return $this->isAnswered;
    }

    /**
     * @param bool $isAnswered
     * @return Question
     */
    public function setIsAnswered(bool $isAnswered): Question
    {
        $this->isAnswered = $isAnswered;
        return $this;
    }

    /**
     * @param string|null $key
     * @return mixed
     */
    public static function search(string $key = null)
    {
        if ($key === null) {
            return self::where();
        } else {
            return self::where('title', 'like', '%' . $key . '%')->orWhere('description', 'like', '%' . $key . '%')->orWhere('tags', 'like', '%' . $key . '%');
        }
    }
}
