<?php

namespace Modules\User\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            // Authentication
            'email' => ['nullable', 'email', 'unique:students,email'],
            'password' => ['nullable', 'string', 'min:8'],

            // Personal Info
            'first_name' => ['required', 'string', 'min:3','max:255'],
            'last_name' => ['required', 'string', 'min:3','max:255'],
            'middle_name' => ['nullable', 'string', 'min:3','max:255'],
            'gender' => ['required', 'in:male,female'],
            'date_of_birth' => ['required', 'date', 'before:today'],

            // Foreign Keys (assuming they are valid existing references)
            'blood_type_id' => ['required', 'exists:blood_types,id'],
            'nationality_id' => ['required', 'exists:nationalities,id'],
            'religion_id' => ['required', 'exists:religions,id'],

            // Contact Info
            'phone_number' => ['required', 'string', 'max:15','regex:/^([0-9\s\-\+\(\)]*)$/'],
            'address' => ['nullable', 'string'],
            'city' => ['nullable', 'string', 'max:255'],
            'state' => ['nullable', 'string', 'max:255'],
            'postal_code' => ['nullable', 'string', 'regex:/^[A-Za-z0-9\- ]{5,10}$/'],
            'country' => ['nullable', 'string', 'max:255'],

            // Educational Information
            'enrollment_date' => ['required', 'date', 'before_or_equal:today'],
            'graduation_date' => ['nullable', 'date', 'after:enrollment_date'],

            'grade_id' => ['required', 'exists:grades,id'],
            'classroom_id' => ['required', 'exists:classrooms,id'],
            'section_id' => ['required', 'exists:sections,id'],

            // Status
            'status' => ['required', 'in:active,graduated,suspended,transferred,withdrawn,inactive'],
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
