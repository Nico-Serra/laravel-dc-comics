<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|min:5|max:80',
            'description' => 'nullable|min:10',
            'price' => 'nullable|min:5|max:30',
            'thumb' => 'nullable|min:50|max:255',
            'series' => 'nullable|min:5|max:50',
            'sale_date' => 'nullable',
            'type' => 'nullable|min:3|max:50'
        ];
    }
}
