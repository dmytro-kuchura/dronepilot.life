<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
            'name' => 'string|required|max:255',
            'alias' => 'string|max:255',
            'content' => 'required',
            'title' => 'string|max:255',
            'description' => 'string',
            'keywords' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Введите название статьи',
            'content' => 'Введите контент',
            'title' => 'Введите title',
            'description' => 'Введите description',
            'keywords' => 'Введите keywords',
        ];
    }
}
