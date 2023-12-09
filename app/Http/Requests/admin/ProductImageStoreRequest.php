<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductImageStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'product_id'=>['required','not_in:0'],
            // 'thumbnail'=>['required','image','mimes:jpg,jpeg,png|max:1000'],
            // 'full'=>['required','image','mimes:jpg,jpeg,png|max:1000'],
        ];
    }
}
