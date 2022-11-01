<?php

namespace App\Http\Requests\Admin\Article;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            'article' => 'required|string',
            'content' => 'required|string',
            'floor_id' => 'required|integer|exists:floors,id',
            'place_ids' => 'required|array',
            'place_ids.*' => 'nullable|integer|exists:places,id',
        ];
    }
    public function messages()
    {
        return [
            'article.required' => 'Это поле необходимо заполнить',
            'article.string' => 'Данные должны соответствовать строчному типу',
            'content.required' => 'Это поле необходимо заполнить',
            'content.string' => 'Данные должны соответствовать строчному типу',
            'floor_id.required' => 'Это поле необходимо заполнить',
            'floor_id.integer' => 'Номер этажа должен быть числом',
            'floor_id.exists' => 'Номер этажа долже быть в базе данных',
            'place_ids.required' => 'Это поле необходимо заполнить',
            'place_ids.array' => 'Необходимо отправить массив данных',
        ];
    }
}
