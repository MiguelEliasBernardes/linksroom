<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property-read \GuzzleHttp\Psr7\UploadedFile $image
 */
class UpdateLinkRequest extends FormRequest
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
            "name" => ["required","string", "min:3"],
            "image" => ["nullable", "image"],
            "link" => ["required","string"],
            "streaming" => ["required", "string"]
        ];
    }
}
