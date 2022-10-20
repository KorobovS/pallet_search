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
            'place_ids' => 'nullable|array',
            'place_ids.*' => 'nullable|integer|exists:places,id',
        ];
    }
}