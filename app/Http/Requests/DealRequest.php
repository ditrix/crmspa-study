<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DealRequest extends FormRequest
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
            'customer_id'   => 'nullable',
            'title'         => 'nullable|string',
            'type'          => 'nullable|string',
            'is_active'     => 'required|boolean',
            'active_from'   => 'nullable|string',
            'active_to'     => 'nullable|string',
        ];
    }
}
