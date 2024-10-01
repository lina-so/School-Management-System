<?php

namespace Modules\School\Http\Requests\Question;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'questions' => ['required', 'array', 'min:1'],
            'questions.*.title' => ['required', 'string'],
            'questions.*.question_type' => ['required', 'in:multiple_choice,true_false'],
            'questions.*.score' => ['required', 'integer', 'min:1'],
            'questions.*.quizze_id' => ['required', 'exists:quizzes,id'],
            'questions.*.answers' => ['required', 'string', 'max:500'],
            'questions.*.right_answer' => ['required', 'string', 'max:500'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
