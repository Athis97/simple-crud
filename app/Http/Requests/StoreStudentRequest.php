<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female',
            'date_of_birth' => 'required|date',
            'roll' => 'required|string|max:255',
            'religion' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email|max:255',
            'class' => 'required|string|max:255',
            'section' => 'required|string|max:255',
            'admission_id' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'gender.required' => 'Gender is required',
            'date_of_birth.required' => 'Date of birth is required',
            'roll.required' => 'Roll number is required',
            'religion.required' => 'Religion is required',
            'email.required' => 'Email is required',
            'class.required' => 'Class is required',
            'section.required' => 'Section is required',
            'admission_id.required' => 'Admission ID is required',
            'phone_number.required' => 'Phone number is required',
        ];
    }
}
