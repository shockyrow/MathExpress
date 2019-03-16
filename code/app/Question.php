<?php

namespace App;

use App\Interfaces\SearchableModelInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Question
 * @package App
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int|null $answer_id
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

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * @param string|null $key
     * @return mixed
     */
    public static function search(string $key = null)
    {
        return $key === null
            ? self::where()
            : self::where('title', 'like', '%' . $key . '%')->orWhere('description', 'like', '%' . $key . '%')
        ;
    }
}
