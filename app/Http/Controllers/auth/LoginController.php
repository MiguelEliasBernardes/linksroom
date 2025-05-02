<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(): View{
        return view(view: "auth.login");
    }

    public function login(LoginRequest $request): RedirectResponse{


        if(
            $user = User::query()
            ->where("email","=", request()->email)
            ->first()
        ){

            dd($user);

            if(Hash::check(request()->password, $user->password)){
                auth()->login($user);

                return to_route("dashboard");
            }
        }

        return back()->with("error","não encontrado");

        {
            return to_route('dashboard');
        }

        return back()->with(['message' => 'erro ao logar']);
    }
}
