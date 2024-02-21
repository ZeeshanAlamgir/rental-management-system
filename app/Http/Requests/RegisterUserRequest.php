<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users,email',
            'country_code' => 'required',
            'phone_no' => 'required',
            'plan_id' => 'required|exists:plans,id'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name field must not exceed 255 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'The email address is already in use.',
            'plan_id.required' => 'The plan is required.',
            'plan_id.exists' => 'The plan is not exists.',
            'captcha.required' => 'Captcha is required.',
            'captcha.captcha' => 'Invalid Captcha.',
        ];
    }
}
