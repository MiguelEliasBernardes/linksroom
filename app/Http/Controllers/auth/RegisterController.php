<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(): View{
        return view(view: "auth.register");
    }

    public function register(RegisterRequest $request): RedirectResponse{


        if($request->TryToRegister())
        {
            return to_route('dashboard');
        }

        return back()->with(['message' => 'erro ao cadastrar']);
    }
}
