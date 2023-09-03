<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createTransactionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'amount' => 'required|numeric|gt:0',
            'type' => 'required|in:credit,debit',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
