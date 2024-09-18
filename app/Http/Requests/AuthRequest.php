<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation;
use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
     * @return array<string, Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "email" => "required|email",
            "password" => "required",
        ];
    }

    public function messages(): array
    {
        return [
            "email.required" => "Bạn chưa nhập email!",
            "email.email" => "Bạn cần nhập đúng định dạng email",
            "password.required" => "Bạn chưa nhập password!"
        ];
    }
}
