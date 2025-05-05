<x-layout.app>

    <form action="{{ route('links.create')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="link">
        <input type="text" name="name">
        <input type="text" name="streaming">
        <input type="text" name="image">
        <button type="submit">enviar</button>
    </form>

    @error('link')
        link erro
    @enderror

    @error('name')
        name erro
    @enderror

    @error('image')
        image error
    @enderror

</x-layout.app>
