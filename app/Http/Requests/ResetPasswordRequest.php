<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'password' => 'required|min:8|max:100|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Ingresa una contraseña.',
            'password.min' => 'La contraseña debe tener como minimo 8 caracteres.',
            'password.max' => 'La contraseña no debe superar los 100 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ];
    }
}
