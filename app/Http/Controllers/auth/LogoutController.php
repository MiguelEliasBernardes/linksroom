<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __invoke(Request $request){
        auth()->logout();
        session()->invalidate();

        return to_route("login.index");
    }
}
