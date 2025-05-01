<?php

namespace App\Http\Controllers;

use App\Http\Requests\MakeLoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{


    public function login(MakeLoginRequest $request){
        $user = User::query();
    }

    public function register(RegisterRequest $request){

        if($request->TryToRegister())
        {
            return to_route('dashboard');
        }

        return back()->with(['message' => 'erro ao cadastrar']);
    }

}
