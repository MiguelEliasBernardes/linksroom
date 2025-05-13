<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Models\Link;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LinkController extends Controller
{

    public function create(): View{
        return view("links.create");
    }

    public function store(StoreLinkRequest $request): RedirectResponse{

        $file = $request->file('image');
        $path = $file->store("link-img" , "public");

        Link::query()->create(
            array_merge(
                $request->validated(),
                        ["user_id" =>auth()->id(),
                        "image" => $path
                        ]
                    )
                );

        return to_route("dashboard");
    }
}
