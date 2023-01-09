<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarProductosRequest extends FormRequest
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
            'img'=>'required',
            'nombre_producto'=>'required|min:2|max:30',
            'no_existencias' => 'required',
            'precio' => 'required',
            'descripcion' => 'required|min:2|max:90',
            'medida' => 'required',
            'precio_oferta' => 'required'
            ];
        }
}
