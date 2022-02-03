<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarSliderRequest extends FormRequest
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
         // tipos de validaciones
         // 'titulo' => 'required|max:10000|min:8|unique:slider,titulo,' . $this->id . '|string|number|date|mimetype:xls|'
         return [
             'titulo' => 'required|max:255',
             'link' => 'max:11500',
             'imagen' => 'max:5000',
         ];
     }
 
 
     public function messages()
     {
         // el mensaje dependiendo de la validacion
         return [
             'titulo.required' => 'Ingresa el título del Slide.',
             'titulo.max' => 'El titulo no debe superar los 255 caracteres.',
             'link.max' => 'El Link no debe superar los 11500 caracteres.',
             'imagen.max' => 'La imagen no debe superar los 5 MB.',
         ];
     }


}
