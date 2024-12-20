<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
     * payment_method
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'paymentMethod' => 'required',
            'phone' => 'required',
            'adresse' => 'required',
            'email' => 'required',
            'fullname' => 'required',
            'amount' => 'required'

        ];
    }
}
