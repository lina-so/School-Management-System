<?php

namespace Modules\School\Http\Requests\Section;

use Illuminate\Validation\Rule;
use App\Enums\Section\SectionStatus;
use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name'=>['required','string','min:3','max:50',Rule::unique('sections','name')->ignore($this->id ?? null)],
            'capacity'=>['required','integer','min:1','max:30'],
            'status'=>['required', new EnumValue(SectionStatus::class)],
            'classroom_id'=>['required','integer','exists:classrooms,id'],
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
