<?php

namespace Modules\School\Http\Requests\Classroom;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ClassroomRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name'=>['required','string','min:3','max:50',Rule::unique('classrooms','name')->ignore($this->id ?? null)],
            'grade_id'=>['required','integer','exists:grades,id'],


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
