<?php

namespace Modules\User\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'min:3','max:255'],
            'last_name' => ['required', 'string', 'min:3','max:255'],
            'gender' => ['required', 'in:male,female'],
            'date_of_birth' => ['required', 'date'],
            'phone' => ['required', 'string', 'max:15','regex:/^([0-9\s\-\+\(\)]*)$/',Rule::unique('teachers','phone_number')->ignore($this->id ?? null)],

            'email' => ['required', 'email', 'unique:teachers,email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'address' => ['nullable', 'string'],

            'hire_date' => ['required', 'date'],
            'retired_date' => ['nullable', 'date', 'after_or_equal:hire_date'],
            
            'job_title' => ['required', 'in:teacher,Senior,Assistant'],
            'experience_years' => ['nullable', 'integer', 'min:0'],
            'salary' => ['nullable', 'numeric', 'min:0'],

            'education_level' => ['required', 'in:High School Diploma,Associates Degree,
                                Bachelors Degree,
                                Masters Degree,Doctorate (PhD),Technical Diploma,
                                Vocational Training,No Formal Education,Other'],

            'employment_type' => ['required', 'in:full-time,part-time,contract'],
            'status' => ['required', 'in:active,on_leave,retired'],
            'blood_type_id' => ['required', 'exists:blood_types,id'],
            'nationality_id' => ['required', 'exists:nationalities,id'],
            'religion_id' => ['required', 'exists:religions,id'],
            'grade_id' => ['required', 'exists:grades,id'],
            'classroom_id' => ['required', 'exists:classrooms,id'],
            'specialization_id' => ['required', 'exists:specializations,id'],
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
