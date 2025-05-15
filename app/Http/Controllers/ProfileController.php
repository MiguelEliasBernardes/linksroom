<?php

namespace App\Http\Controllers;

use App\Http\Requests\MakeLoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{

    public function create(): View{

        $user = auth()->user();

        return view("profile.editProfile", ["user"=> $user]);
    }

    public function update(UpdateProfileRequest $request, User $user): RedirectResponse{

        $file = $request->file('image');

        if($file != null){
            $path = $file->store("link-img" , "public");
        }

        User::query()->where("id", auth()->id())->update(
            array_merge(
                $request->validated(),
                $file != null ? ["image" => $path] : []
            )
        );

        return to_route("dashboard")->with([
                                            "status" => "success",
                                            "message" => "Perfil Atualizado com Sucesso!"
                                        ]);


    }

}
