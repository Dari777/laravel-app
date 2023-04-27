<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */

    public function rules(): array
    {
        return [
            'first-name' => 'required|min:2|max:15',
            'last-name' => 'required|min:2|max:15',
            'email' => 'required|email',
            'subject' => 'required|min:10|max:50',
            'message' => 'required|min:15|max:500',
        ];
    }

    public function messages()
    {
        return [
            'first-name.required' => 'Поле Ім’я є обов’язковим для заповнення',
            'last-name.required' => 'Поле Прізвище є обов’язковим для заповнення',
            'email.required' => 'Поле Еmail є обов’язковим для заповнення',
            'subject.required' => 'Поле Тема повідомлення є обов’язковим для заповнення',
            'message.required' => 'Поле Текст повідомлення є обов’язковим для заповнення',
        ];
    }
};
