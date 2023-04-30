<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerAuth extends FormRequest
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
                    'name' => 'required|string|max:255',
                    'email' => [
                        'required',
                        'email',
                        'max:255',
                        "unique:users,email,{$id},id",
                    ],
                    'password' => [
                        'required',
                        'min:8',
                        'max:15',
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
                    ]
                    
        ];
        return $rules;
    }
}
