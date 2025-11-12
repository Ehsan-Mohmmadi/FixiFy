<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class TaskerRequest extends FormRequest
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
     * @return array<string,ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'profile' => ['nullable'],
            'job_title' => ['required', 'string'],
            'cost' => ['required','string'],
            'work_time' => ['required','string'],
            'description' => ['nullable', 'string'],
            'total_rate' => ['nullable'],
            'work_quality' => ['nullable'],
            'reliability' => ['nullable'],
            'punctuality' => ['nullable'],
            'solution' => ['nullable'],
            'pay_out' => ['nullable'],
        ];
    }
}
