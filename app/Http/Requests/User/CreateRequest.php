<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
             "name'"=> "required",
             "email"=>"required|email",
             "password"=>"required",
             "avatar"=>"required"
        ];
    }
    public function message(){
        return [
            'name.required' => 'Please enter a name',      
            'email.required' => 'Please enter an email',
            'email.email' => 'Please enter a valid email address',
            'password.required' => 'Please enter a password',
            'avatar.required' => 'Please upload an avatar',
            'avatar.image' => 'Avatar must be an image file'
        ];
    }
  
}
