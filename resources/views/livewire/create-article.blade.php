<div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div>
            <input type="text" wire:model="title" placeholder="Min. 10 caractères" required>
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <textarea wire:model="content" placeholder="Min. 20 caractères" required></textarea>
            @error('content') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit">Créer</button>
    </form>
</div>
