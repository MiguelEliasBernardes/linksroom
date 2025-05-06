<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View{

        /** @Var User $user*/

        $user = auth()->user();

        $user->links;


        return view('dashboard',[
            'links' => $user->links
        ]);
    }
}
