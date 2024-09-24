<?php

namespace Modules\School\Http\Requests\Grade;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class GradeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name'=>['required','string','min:3','max:50',Rule::unique('grades','name')->ignore($this->id ?? null)],

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
