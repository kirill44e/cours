<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
          'name' => 'required|min:5|max:50',
          'email' => 'required|min:5|unique:users',
          'password' => 'required|min:5|confirmed'
        ];
    }

    public function messages()
    {
      return [
        'name.required' => 'Поле Имя должно быть заполнено',
        'email.required' => 'Поле E-mail должно быть заполнено',
        'password.required' => 'Поле Пароль должно быть заполнено',
        'password.confirmed' => 'Неверное подтверждение пароля',
      ];
    }
}
