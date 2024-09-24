<?php

namespace Modules\School\Http\Requests\Unit;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UnitRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'number'=>['required','integer','max:12'],
            'name'=>['required','string','min:3','max:50',Rule::unique('units','name')->ignore($this->id ?? null)],
            'subject_id'=>['required','integer','exists:subjects,id'],
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
