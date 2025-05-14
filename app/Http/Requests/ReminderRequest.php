<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReminderRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'remind_at' => 'required|date_format:Y-m-d\TH:i',
            'done' => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return[
            'title.required' => 'O título é obrigatório.',
            'title.string' => 'O título deve ser uma sequência de caracteres.',
            'title.max' => 'O título deve ter no máximo 255 caracteres.',
            'description.string' => 'A descrição deve ser uma sequência de caracteres.',
            'remind_at.required' => 'A data e hora do lembrete são obrigatórias.',
            'remind_at.date_format' => 'A data e hora do lembrete devem estar no formato AAAA-MM-DDThh:mm.',
            'done.required' => 'O campo "feito" é obrigatório.',
            'done.boolean' => 'O campo "feito" deve ser verdadeiro ou falso.',
        ];
    }
}
