<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre'=>'required',
            'curso'=>'required',
            'nota1'=>'required',
            'nota2'=>'required'
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required'=>'El nombre del alumno es obligatorio.',
            'curso.required'=>'El nombre del curso es obligatorio.',
            'nota1.required'=>'El resultado de la nota1 es obligatorio.',
            'nota2.required'=>'El resultado de la nota1 es obligatorio.'
        ];
    }
}
