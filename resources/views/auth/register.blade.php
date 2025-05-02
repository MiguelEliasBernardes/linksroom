<x-layout.app>

    <form action="{{ route('register.submit')}}" method="post">
        @csrf
        <input type="text" name="name">
        <input type="text" name="last_name">
        <input type="text" name="email">
        <input type="text" name="password">
        <button type="submit">enviar</button>
    </form>

    @error('email')
        email erro
    @enderror

    @error('password')
        password erro
    @enderror

    @error('image')
        image error
    @enderror

</x-layout.app>
