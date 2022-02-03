<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearUsuarioRequest extends FormRequest
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
            'name' => 'required|max:250',
            'email' => 'required|max:100|unique:users',
            'rol' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'tipo_documento' => 'required',
            'numero_documento' => 'required|max:30',
            'numero_whatsapp' => 'required|max:30',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ingresa el nombre del usuario.',
            'name.max' => 'El nombre no debe superar los 250 caracteres.',
            'email.required' => 'Ingresa el correo electronico.',
            'email.unique' => 'Este correo ya esta registrado.',
            'email.max' => 'El correo no debe superar los 100 caracteres.',
            'rol.required' => 'Selecciona el rol de usuario.',
            'password.required' => 'Ingresa una contraseña',
            'password.min' => 'La contraseña debe tener como minimo 8 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'tipo_documento.required' => 'Selecciona un tipo de documento',
            'numero_documento.required' => 'Ingresa un numero de documento',
            'numero_documento.max' => 'El numero de documento no debe superar las 30 cifras',
            'numero_whatsapp.required' => 'Ingresa un numero Telefono celular / Whatsapp',
            'numero_whatsapp.required' => 'El numero no debe superar las 30 cifras',
        ];
    }
}
