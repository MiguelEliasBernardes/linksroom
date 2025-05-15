<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
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

        $lastOrder = Link::where('user_id', auth()->id())->max('sort') ?? 0;
        $newOrder = $lastOrder + 1;

        Link::query()->create(
            array_merge(
                $request->validated(),
                        ["user_id" =>auth()->id(),
                        "image" => $path,
                        "sort" => $newOrder
                        ]
                    )
                );

        return to_route("dashboard")->with([
                "status" => "success",
                "message" => "Link cadastrado com sucesso"
        ]);
    }

    public function delete(Link $link): RedirectResponse{

        try{
            $link->delete();

            return to_route("dashboard")->with([
                "status" => "success",
                "message"=> "Link Excluído com Sucesso"]);

        }catch(\Exception $e){
            return to_route("dashboard")->with([
                "status" => "sucesss",
                "error" => $e->getMessage()]);
        }
    }

    public function edit(int $id): View{

        $link = Link::where("id","=", $id)->first();

        return view("links.edit",["link" => $link]);
    }


    public function update(UpdateLinkRequest $request, Link $link): RedirectResponse{

        $file = $request->file('image');

        if($file != null){
            $path = $file->store("link-img" , "public");
        }

        Link::query()->where("id", $link->id)->update(
            array_merge(
                $request->validated(),
                $file != null ? ["image" => $path] : []
            )
        );

        return to_route("dashboard")->with([
                                            "status" => "success",
                                            "message" => "Link atualizado!"
                                        ]);

    }

    public function up(Link $link){

        $link->moveUp();

        return back();

    }

    public function down(Link $link){
        $link->moveDown();

        return back();
    }
}
