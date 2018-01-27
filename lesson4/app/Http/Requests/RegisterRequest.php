<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|max:30',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'cfpassword' => 'same:password'
        ];
    }

    public function messages(){
        return [
            'username.required' => 'vui lòng điền tên đăng nhập',
            'username.max' => 'tên đăng nhập không quá 30 ký tự',
            'email.required' => 'Vui lòng điền email',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Vui lòng điền mật khẩu',
            'password.min' => 'mật khẩu phải có ít nhất 6 ký tự',
            'cfpassword.same' => 'Không khớp với mật khẩu'
        ];
    }
}
