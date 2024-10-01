<?php

namespace Modules\School\Models\Question;

use Modules\School\Models\Quizze;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\School\Database\Factories\Question/QuestionFactory;

class Question extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['title','answers','right_answer','score','quizze_id'];

    protected $with = ['quizze'];

    public function quizze()
    {
        return $this->belongsTo(Quizze::class);
    }

    // protected static function newFactory(): Question/QuestionFactory
    // {
    //     // return Question/QuestionFactory::new();
    // }
}
