<?php

namespace Modules\Graduate\Http\Requests\Promotion;

use Illuminate\Foundation\Http\FormRequest;

class PromotionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'student_id'=>['required','integer','exists:students,id'],

            'from_grade'=>['required','integer','exists:grades,id'],
            'from_classroom'=>['required','integer','exists:classrooms,id'],
            'from_section'=>['required','integer','exists:sections,id'],


            'to_grade'=>['required','integer','exists:grades,id'],
            'to_classroom'=>['required','integer','exists:classrooms,id'],
            'to_section'=>['required','integer','exists:sections,id'],

            'academic_year'=>['required'],
            'academic_year_new'=>['required'],



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
