<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

/**
 * @property-read $name
 * @property-read $last_name
 * @property-read $email
 * @property-read $password
 * @property-read $image
 */

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email','unique:users'],
            'password' => ['required', 'string', Password::min(8)
                                                            ->mixedCase()
                                                            ->numbers()
                                                            ->symbols()],
            'image' => ['image']
        ];
    }

    public function TryToRegister(): bool{

        $user = new User();
        $user->name = $this->name;
        $user->last_name = $this->last_name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->image = $this->image;

        $user->save();

        auth()->login($user);

        return true;
    }
}
