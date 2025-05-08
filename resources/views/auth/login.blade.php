<x-layout.app>

    <main class="flex p-4 h-screen w-screen bg-(--color-container)">
        <section class="w-3/6">
            <img class="h-full rounded-3xl" src="{{ asset('images/assets/sun-tornado.png') }}" alt="Fundo">
        </section>

        <section class=" flex flex-col w-3/6 items-center justify-around">
            <img class="w-56" src="{{ asset('images/assets/logo.png') }}" alt="logo">

            <div class="h-3/5 w-2/3 mx-auto">
                <div>
                    <h2 class="font-(family-name:--space) font-bold text-xl">Acessar Conta</h2>
                    <div class="w-8 h-0.5 mt-0.5 bg-orange-500"></div>
                </div>

                <form action="{{ route('login.submit') }}" method="post" class="flex flex-col justify-around gap-10 mt-8 font-(family-name:--outfit)">
                    @csrf

                    <div class="flex flex-col gap-3">
                        <label for="email">E-mail</label>
                        <label class="floating-label">
                            <span>Seu E-mail</span>
                            <input type="text" name="email" placeholder="Digite o seu E-mail" class="bg-(--scure) h-10 rounded-xl input input-md focus:outline-0 w-full">
                        </label>

                        @error('email')
                            error email
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="password">Senha</label>
                        <label for="password" class="floating-label">
                            <span>Sua Senha</span>
                            <input type="text" name="password" placeholder="Digite sua senha" class="bg-(--scure) h-10 rounded-xl input input-md focus:outline-0 w-full">
                        </label>

                        @error('password')
                            error password
                        @enderror
                    </div>

                    <div class="flex justify-center items-center">
                        <button type="submit" class="bg-orange-500 w-2/4">Enviar</button>
                    </div>

                </form>

            </div>

            <div>
                <p>Não tem cadastro?<a href="">Criar Conta</a></p>
            </div>
        </section>
    </main>

</x-layout.app>
