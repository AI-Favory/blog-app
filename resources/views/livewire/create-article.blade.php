<div class="mb-4">
    @if (session()->has('success'))
        <div class="alert alert-success p-4 w-full bg-green-100 mb-2 rounded-[5px]">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="mb-2">
            <input class="border border-grey-600 w-full p-2 rounded-[5px]" type="text" wire:model="title" placeholder="Min. 10 caractères" required>
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-2">
            <textarea class="border border-grey-600 w-full p-2 rounded-[5px] h-64" wire:model="content" placeholder="Min. 20 caractères" required></textarea>
            @error('content') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="w-full bg-[#222] text-white rounded-[5px] p-2">Créer</button>
    </form>
</div>
