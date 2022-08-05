<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateCallback extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'adress' => 'required|max:255',
            'moljal' => 'required|max:255',
            'bekat' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'frame' => 'required'
        ];
    }
}
