<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePetRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this-> id ?? '';
        $rules =  [
                    'name' => [
                        'nullable',
                        'regex:/^[a-zA-Z ]+$/',
                        'max:20',
                    ],
                    'cidade' => [
                        'required',
                        'min:5',
                        'max:15',
                    ],
                    'estado' => [
                        'required',
                        'min:5',
                        'max:15',
                    ],
                    'idade' => [
                        'nullable',
                        'min:1',
                        'max:40',
                    ],
                    'especie' => [
                        'required',
                        'min:1',
                        'max:15',
                    ],
                    'raca' => [
                        'nullable',
                        'min:5',
                        'max:15',
                    ],
                    'bio' => [
                        'nullable',
                        'min:5',
                        'max:15',
                    ],
                    
        ];
        return $rules;
    }
}
