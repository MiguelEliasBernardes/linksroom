<x-layout.app>

    <main class="flex p-4 h-screen w-screen bg-(--color-container)">
        <section class="w-3/6">
            <img class="h-full rounded-3xl" src="{{ asset('images/assets/sun-tornado.png') }}" alt="Fundo">
        </section>

        <section class=" flex flex-col w-3/6 items-center gap-10">
            <img class="w-56" src="{{ asset('images/assets/logo.png') }}" alt="logo">

            <div class="h-3/5 w-2/3 mx-auto">
                <div>
                    <h2 class="font-(family-name:--space) font-bold text-xl">Criar Conta</h2>
                    <div class="w-8 h-0.5 mt-0.5 bg-(--orange)"></div>
                </div>

                <form action="{{ route('register.submit') }}" method="post" class="flex flex-col justify-around gap-5 mt-8 font-(family-name:--outfit)">
                    @csrf

                    <div class="flex justify-between gap-4">
                        <div class="flex flex-col gap-3 w-1/2">
                            <label for="name">Nome</label>
                            <label class="floating-label">
                                <span>Seu Nome</span>
                                <input type="text" name="name" placeholder="Digite o seu nome..." class="bg-(--scure) h-12 rounded-xl input input-md focus:outline-0 w-full {{ $errors->has('name') ? 'input-error' : ''}} ">
                            </label>

                            @error('name')
                                <p class="text-error">Nome inválido</p>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-3 w-1/2">
                            <label for="last_name">Sobrenome</label>
                            <label class="floating-label">
                                <span>Seu Sobrenome</span>
                                <input type="text" name="last_name" placeholder="Digite o seu Sobrenome..." class="bg-(--scure) h-12 rounded-xl input input-md focus:outline-0 w-full {{ $errors->has('last_name') ? 'input-error' : ''}} ">
                            </label>

                            @error('last_name')
                                <p class="text-error">Sobrenome inválido</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="email">E-mail</label>
                        <label class="floating-label">
                            <span>Seu E-mail</span>
                            <input type="text" name="email" placeholder="Digite o seu E-mail" class="bg-(--scure) h-12 rounded-xl input input-md focus:outline-0 w-full {{ $errors->has('email') ? 'input-error' : ''}} ">
                        </label>

                        @error('email')
                            <p class="text-error">E-mail inválido</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="password">Senha</label>
                        <label for="password" class="floating-label">
                            <span>Sua Senha</span>
                            <input type="text" name="password" placeholder="Digite sua senha" class="bg-(--scure) h-12 rounded-xl input input-md focus:outline-0 w-full {{ $errors->has('password') ? 'input-error' : ''}}">
                        </label>

                        @error('password')
                            <p class="text-error">Senha inválida</p>
                        @enderror
                    </div>

                    <div class="flex justify-center items-center mt-8 font-(family-name:--outfit) font-bold">
                        <button type="submit" class="bg-(--orange) w-2/5 py-2 rounded-3xl text-(--color-container) hover:rounded-xl transition-all delay-150 duration-300">Criar Conta</button>
                    </div>

                </form>

                <div class="mt-12 text-center w-full">
                    <p class="text-(--content-secondary) text-sm">Já tem cadastro? <a href="/login" class="text-white font-bold">Acessar Conta</a></p>
                </div>
            </div>

        </section>
    </main>

</x-layout.app>

