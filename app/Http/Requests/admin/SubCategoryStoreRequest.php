<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryStoreRequest extends FormRequest
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
            'name'=>['required','max:100'],
            // 'slug'=>['required'],
            // 'category_id'=>['required'],
            'image'=>['image','mimes:jpg,jpeg,png|max:1000'],
            // 'description'=>['required']
        ];
    }
}
