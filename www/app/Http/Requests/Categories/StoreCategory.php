<?php

namespace App\Http\Requests\Categories;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreCategory extends FormRequest
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
            'alias' => 'string|nullable|max:255',
            'status' => 'required|in:on,off',
            'title' => 'string|nullable|max:255',
            'description' => 'string|nullable',
            'keywords' => 'string|nullable',
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

    /**
     * Format errors
     *
     * @param Validator $validator
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
