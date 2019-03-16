<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Answer
 *
 * @package App
 * @property int $id
 * @property int $user_id
 * @property int $question_id
 * @property string $text
 */
class Answer extends Model
{
    protected $fillable = [
        'text',
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
     * @return Answer
     */
    public function setId(int $id): Answer
    {
        $this->id = $id;

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
     * @return Answer
     */
    public function setUserId(int $user_id): Answer
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuestionId(): int
    {
        return $this->question_id;
    }

    /**
     * @param int $question_id
     * @return Answer
     */
    public function setQuestionId(int $question_id): Answer
    {
        $this->question_id = $question_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return Answer
     */
    public function setText(string $text): Answer
    {
        $this->text = $text;

        return $this;
    }

    public function question()
    {
        return $this->hasOne(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
