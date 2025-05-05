<x-layout.app>

    <label for="add-link-modal" class="btn btn-primary">Adicionar link</label>


    <input type="checkbox" id="add-link-modal" class="modal-toggle" />
<div class="modal">
  <div class="modal-box bg-neutral text-neutral-content rounded-xl max-w-2xl">
    <h3 class="font-bold text-lg text-white border-b border-orange-500 pb-2">Adicionar link</h3>

    @include('links.create')

  </div>
</div>


</x-layout.app>
