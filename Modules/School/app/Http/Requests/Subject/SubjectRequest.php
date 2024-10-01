<?php

namespace Modules\School\Http\Requests\Subject;

use Illuminate\Validation\Rule;
use App\Enums\Section\SectionStatus;
use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'status'=>['required', new EnumValue(SectionStatus::class)],
            'name'=>['required','string','min:3','max:50',Rule::unique('subjects','name')->ignore($this->id ?? null)],
            'grade_id'=>['required','integer','exists:grades,id'],
            'classroom_id'=>['required','integer','exists:classrooms,id'],
            'teacher_id'=>['required','integer','exists:teachers,id'],
            'file' => 'required|file|mimes:pdf,doc,docx,jpg,png|max:2048',

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
