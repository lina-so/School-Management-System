<?php

namespace Modules\User\Http\Requests\MyParent;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Modules\School\Enums\MyParent\ParentTypeEnum;

class MyParentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', Rule::unique('my_parents','email')->ignore($this->id ?? null)],
            'password' => ['required', 'string', 'min:8'],
            'first_name' => ['required', 'string', 'min:3','max:255'],
            'last_name' => ['required', 'string', 'min:3','max:255'],
            'national_ID' => ['required', 'string', 'max:20','regex:/^[0-9]+$/',Rule::unique('my_parents','national_ID')->ignore($this->id ?? null)],
            'passport_ID' => ['nullable', 'string', 'max:20','regex:/^[a-zA-Z0-9]+$/',Rule::unique('my_parents','passport_ID')->ignore($this->id ?? null)],
            'phone' => ['required', 'string', 'max:15','regex:/^([0-9\s\-\+\(\)]*)$/',Rule::unique('my_parents','phone')->ignore($this->id ?? null)],
            'job' => ['nullable', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:500'],
            'type' => ['required',new EnumValue(ParentTypeEnum::class)],
            'blood_type_id' => ['required', 'exists:blood_types,id',Rule::exists('blood_type','id')],
            'nationality_id' => ['required', Rule::exists('nationalities', 'id')],
            'religion_id' => ['required', Rule::exists('religions', 'id')],

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
