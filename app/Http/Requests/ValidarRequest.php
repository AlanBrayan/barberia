<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarRequest extends FormRequest
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
                
            'nombre'=>'required|min:2|max:10',
            'email' => 'required|min:3|max:30',
            'app' => 'required',
            'apm' => 'required',
            'pass' => 'required',
            'tel' => 'required',
            'matricula'=> 'required',
            'fn'=> 'required',
            'img'=>'required'

            ];
        }
}
