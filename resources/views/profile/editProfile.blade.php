<x-layout.app>

    <main class="h-screen w-screen bg-(--color-container)">

        @if (session('status') == 'success')
            @include('components.toast')
        @endif

        <section class="flex items-center justify-center h-2/10">
            <img src="{{ asset('images/assets/logo.png') }}" alt="Logo">
        </section>

        <section class="flex flex-col w-3/4 mx-auto h-4/6">

            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="flex flex-col w-3/4 mx-auto h-4/6 gap-12">
            @csrf
            @method('PUT')


                <div class="flex justify-between">
                    <div>
                        <h2 class="font-(family-name:--space) font-bold text-xl">Perfil</h2>
                        <div class="w-8 h-0.5 mt-0.5 bg-(--orange)"></div>
                    </div>

                    <div class="">
                        <a href="{{ route('dashboard') }}" class="btn bg-(--scure) text-(--orange) rounded-4xl">Fechar</a>
                        <button class="btn bg-(--orange) text-(--scure) rounded-4xl" type="submit">Salvar</button>
                    </div>
                </div>

                <div class="flex font-(family-name:--outfit)">
                    <div class="w-2/2 text-lg flex flex-col gap-3">
                        <div class="flex flex-col">
                            <label for="name">Nome</label>
                            <input name="name" type="text" value="{{ $user->name }}" class="mt-2 bg-(--scure) h-10 rounded-xl input input-md focus:outline-0 w-full text-sm">
                        </div>

                        <div>
                            <label for="email">E-mail</label>
                            <input name="email" type="email" value="{{ $user->email }}" class="mt-2 bg-(--scure) h-10 rounded-xl input input-md focus:outline-0 w-full text-sm">
                        </div>

                        <div class="flex flex-col">
                            <label for="bio">Bio</label>
                            <textarea name="bio" class="mt-2 bg-(--scure) h-40 rounded-xl input input-md focus:outline-0 w-full text-sm resize-none" >
                                {{ $user->bio }}
                            </textarea>
                        </div>
                    </div>

                    <div class="flex flex-col items-center pt-6 gap-2 w-1/2 mt-7">

                        @if ($user->image)
                            <div style="background-image: url({{ asset('storage/' . $user->image)}})" class="w-[100px] h-[100px] rounded-xl flex bg-cover items-center justify-center text-xs text-black ">

                            </div>
                        @else
                            <div class="w-[100px] h-[100px] bg-(--orange) rounded-xl flex items-center justify-center text-xs text-black ">
                                100x100 px
                            </div>
                        @endif


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

            </form>

        </section>

        @include('components.nav', ["pag" => "profile"] )

    </main>


</x-layout.app>
