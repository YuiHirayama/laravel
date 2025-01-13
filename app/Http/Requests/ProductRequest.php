<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:50'],
            'information' => ['required', 'string', 'max:1000'],
            'price' => ['required', 'integer'],
            'sort_order' => ['nullable', 'integer'],
            'quantity' => ['required', 'integer', 'between:0,99'],
            'shop_id' => ['required', Rule::exists('shops', 'id')],
            'category' => ['required', Rule::exists('secondary_categories', 'id')],
            'image1' => ['nullable', Rule::exists('images', 'id')],
            'image2' => ['nullable', Rule::exists('images', 'id')],
            'image3' => ['nullable', Rule::exists('images', 'id')],
            'image4' => ['nullable', Rule::exists('images', 'id')],
            'is_selling' => ['required', 'boolean'],
        ];
    }
}
