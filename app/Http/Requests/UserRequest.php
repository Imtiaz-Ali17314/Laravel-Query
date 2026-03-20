<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
           'username' => 'required',
            'userage' =>  'required|numeric|min:18',
            'useremail' => 'required|email',
            'usercity' =>  'required'
        ];
    }

    // public function messages()
    // {
    //     return [
    //         "username.required" => 'User Name is required.',
    //         "userage.required" => 'User Age is required.',
    //         "userage.numeric" => 'User Age must be Numeric.',
    //         "userage.min" => 'User Age shoud not less than 18 Years old.',
    //         "useremail.required" => 'User Email is required.',
    //         "useremail.email" => 'Enter the correct Email address.',
    //         "usercity.required" => 'User City is required.'
    //     ];
      
    // }

    public function attributes()
    {
        return [
            'username' => 'User Name',
            'userage' =>  'User Age',
            'useremail' => 'User Email',
            'usercity' =>  'User City'
        ];
      
    }

    protected function prepareForValidation():void
    {
        // $this->merge([
        //     'username' => strtoupper($this->username),
        //     'username' => Str::slug($this->username),

        // ]);
    }

    protected $stopOnFirstFailure = true;
}
