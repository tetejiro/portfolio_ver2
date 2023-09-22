<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MyPageInfoRequest extends FormRequest
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
            'task_content' => ['required', 'string'],
            'task_start' => ['required', 'date'],
            'task_end' => ['required', 'date'],
            'schedule_status' => ['required', 'numeric'],
            'available_start' => ['required'],
            'available_end' => ['required'],
            'caution' => ['required', 'string'],
            'strong_point_1' => ['required', 'string'],
            'strong_point_2' => ['nullable'],
            'strong_point_3' => ['nullable']
        ];
    }
}
