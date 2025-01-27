<div>
    <button wire:click="openModal" class="text-blue-500">Éditer</button>

    @if($showModal)
        <div class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
                <h2 class="text-xl font-bold mb-4">Éditer l'article</h2>
                <form wire:submit.prevent="update">
                    <div class="mb-4">
                        <input type="text" wire:model="title" class="border border-gray-300 p-2 w-full rounded" placeholder="Titre">
                        @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <textarea wire:model="content" class="border border-gray-300 p-2 w-full rounded" placeholder="Contenu"></textarea>
                        @error('content') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex justify-end">
                        <button type="button" wire:click="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Annuler</button>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
