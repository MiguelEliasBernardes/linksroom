<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{

    public function create(){
        return view("links.create");
    }

    public function store(StoreLinkRequest $request){

        Link::query()->create(
            array_merge(
                $request->validated(),
                        ["user_id" =>auth()->id()]
                    )
                );

        return to_route("dashboard");
    }
}
