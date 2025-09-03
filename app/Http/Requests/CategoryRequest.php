<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp,gif|max:4096',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatório.',
            'name.string'   => 'O nome deve ser uma sequência de caracteres.',
            'name.max'      => 'O nome não pode ter mais de 255 caracteres.',
            'image.required' => 'A imagem é obrigatória.',
            'image.image'   => 'O arquivo enviado deve ser uma imagem.',
            'image.mimes'   => 'A imagem deve ser do tipo: jpg, jpeg, png, webp ou gif.',
            'image.max'     => 'A imagem não pode ser maior que 4MB.',
        ];
    }

}
