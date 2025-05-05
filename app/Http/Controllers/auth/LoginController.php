<?php

namespace App\Http\Controllers\auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
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
            if(Hash::check(request()->password, $user->password)){
                auth()->login($user);

                return to_route("dashboard");
            }
        }

        return back()->with("error","não encontrado");

    }
}
