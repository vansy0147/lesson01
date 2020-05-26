<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|min:10|max:100',
            'price' => 'required',
            'desc' => 'required|url'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => trans('product.errors.name.required'),
            'name.min' => trans('product.errors_name_min'),
            'name.max' => 'ten khong qua 100 ki tu',
            'desc.required' => trans('product.errors_desc.required'),
        ];
    }
}
