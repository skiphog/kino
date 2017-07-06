<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * Валидация
     * @return array
     */
    public function rules()
    {
        return [
            'title'       => 'required|min:3|max:255',
            'description' => 'required|min:10|max:255',
            'text'        => 'required|min:100'
        ];
    }
}