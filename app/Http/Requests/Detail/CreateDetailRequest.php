<?php

namespace App\Http\Requests\Detail;

use Illuminate\Foundation\Http\FormRequest;

class CreateDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'key' => ['required', 'in:detail,service,document,rule'],
            'value' => ['required', 'string'],
            'type' => ['required', 'in:string,json'],
        ];
    }
    public function attributes(): array
    {
        return [
        'key' => '',
        'value' => '',
        'type' => ''
        ];
    }
}
