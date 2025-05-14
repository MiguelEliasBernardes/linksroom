<x-layout.app>

    <form action="{{ route('links.update', $link->id )}}" method="post" enctype="multipart/form-data" class="flex flex-col justify-between pt-15 w-2/3  font-(family-name:--outfit)">
        @csrf
        @method('PUT')

        <div class="flex">
            <div class="flex flex-col w-3/4 text-sm">
                <div class="flex gap-1">
                    <div>
                        <label class="mb-2">Titulo do link</label>
                        <input type="text" placeholder="Digite o nome do conteúdo" name="name" value="{{ $link->name }}" class="mt-2 bg-(--scure) h-10 rounded-xl input input-md focus:outline-0 w-full text-sm">
                    </div>

                    <div>
                        <label for="streaming" class="mb-2">Plataforma de streaming</label>
                        <input value="{{ $link->streaming }}" type="text" name="streaming" placeholder="Onde você está assistindo?" class="mt-2 bg-(--scure) h-10 rounded-xl input input-md focus:outline-0 w-full">
                    </div>
                </div>

                <div class="mt-4 text-sm">
                    <label for="link" class="">URL</label>
                    <input value="{{ $link->link }}" type="text" name="link" placeholder="Cole a URL do conteúdo" class="mt-2 bg-(--scure) h-10 rounded-xl input input-md focus:outline-0 w-full">
                </div>

            </div>

            <div class="flex flex-col items-center justify-center gap-2 w-1/4 mt-7">
                <div style="background-image: url({{ asset('storage/' . $link->image)}})" class="w-[100px] h-[100px]  rounded-xl bg-cover flex items-center justify-center text-xs text-black ">
                </div>

                <label for="upload-image" class="cursor-pointer flex items-center text-white text-sm">
                    <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="white">
                        <path d="M6 20L18 20" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path><path d="M12 16V4M12 4L15.5 7.5M12 4L8.5 7.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>

                    Adicionar Imagem
                </label>
                <input type="file" id="upload-image" name="image" class="hidden">
            </div>
        </div>



        <div class="modal-action">
            <label for="add-link-modal" class="btn bg-(--scure) text-(--orange) rounded-4xl">Fechar</label>
            <button class="btn bg-(--orange) text-(--scure) rounded-4xl" type="submit">Salvar</button>
        </div>
    </form>
</x-layout.app>
