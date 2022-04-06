<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'number' => 'required|regex:/(7)[0-9]{10}/',
        ];
    }

    public function messages()
    {
      return [
        'number.required' => 'Поле должно быть заполнено',
        'name.required' => 'Поле Имя должно быть заполнено',
        'email.required' => 'Поле E-mail должно быть заполнено',
        'password.required' => 'Поле Пароль должно быть заполнено',
        'password.confirmed' => 'Неверное подтверждение пароля',
      ];
    }
}
