<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsRequest extends FormRequest
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
            'title' => 'required|string|max:100|min:2',
            'content' => 'required|string|min:5',

        ];
    }


    public function messages(): array
    {
        return [

            'title.required' => 'il titolo campo obbligatorio',
            'title.string' => 'il titolo deve essere una stringa',
            'title.max' => 'il titolo può avere massimo :max caratteri',
            'title.min' => 'il titolo deve avere minimo :min caratteri',
            'content.required' => 'il contenuto è un campo obbligatorio',
            'content.min' => 'il campo deve avere minimo :min caratteri',
            'reading_time.required' => 'il tempo di lettura è un campo obbligatorio ',
            'reading_time.min' => 'il campo deve essere minimo :min ',
            'reading_time.max' => 'il campo deve essere massimo :max ',
        ];
    }
}
