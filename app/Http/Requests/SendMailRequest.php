<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMailRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'request_for' => ['required_if:is_question,true'],
            'detail' => ['required', 'string', 'max:255'],
            'cause' => ['string', 'max:255', 'nullable'],
            'other' => ['string', 'max:255', 'nullable'],
            'rsvp' => ['required_if:is_question,false','boolean']
        ];
    }
}
