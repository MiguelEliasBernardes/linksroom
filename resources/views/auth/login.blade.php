<x-layout.app>

    <main class="flex p-4 h-screen w-screen bg-neutral">
        <section class="w-3/6">
            <img class="h-full rounded-3xl" src="{{ asset('images/assets/sun-tornado.png') }}" alt="Fundo">
        </section>

        <section class=" flex flex-col w-3/6 items-center justify-around">
            <img class="w-56" src="{{ asset('images/assets/logo.png') }}" alt="logo">

            <div class="h-3/5 w-2/3">
                <h2 class="">Acessar Conta</h2>

                <form action="{{ route('login.submit') }}" method="post">
                    @csrf

                    <div class="flex flex-col">
                        <label for="email">E-mail</label>
                        <input type="email" name="email">

                        @error('email')
                            error email
                        @enderror
                    </div>

                    <div class="flex flex-col">
                        <label for="password">Password</label>
                        <input type="text" name="password">
                        @error('password')
                            error password
                        @enderror
                    </div>

                    <button type="submit">Enviar</button>
                </form>

            </div>

            <div>
                <p>Não tem cadastro?<a href="">Criar Conta</a></p>
            </div>
        </section>
    </main>

</x-layout.app>
