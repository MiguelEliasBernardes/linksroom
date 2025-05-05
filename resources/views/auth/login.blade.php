<x-layout.app>

    <form action="{{ route('login.submit') }}" method="post">
        @csrf
        <input type="email" name="email">
        <input type="text" name="password">
        <button type="submit">Enviar</button>
    </form>

    @error('email')
        error email
    @enderror

    @error('password')
        error password
    @enderror

</x-layout.app>
