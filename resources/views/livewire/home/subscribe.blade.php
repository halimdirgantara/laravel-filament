<div class="container mx-auto px-6 lg:px-16 py-8">
    <div class="card glass text-white w-full h-80">
        <figure><img src="{{ asset('storage/' . $randomImage) }}" alt="iphones" /></figure>
        <div class="card-body">
            <h2 class="card-title mb-2.5 text-white">Subscribe to our newsletter</h2>
            <p class="mb-4">Subscribe to our newsletter to get the latest posts and updates.</p>
            <div class="card-actions">
                <div class="join max-w-sm">
                    <input type="email" wire:model="email"
                        class="join-item input {{ session()->has('success') ? 'is-valid' : '' }} {{ $errors->has('email') ? 'is-invalid' : '' }}"
                        placeholder="Email">
                    <button wire:click="subscribe" class="join-item btn btn-primary">Subscribe</button>
                </div>
            </div>
            @error('email')
                <span class="label">
                    <span class="label-text-alt text-error">{{ $message }}</span>
                </span>
            @enderror
            @if (session()->has('success') && $successAlert)
                <div class="alert alert-soft alert-success max-w-sm mt-2" role="alert" id="dismiss-alert">
                    {{ session('success') }}
                    <button class="ms-auto leading-none" wire:click="closeAlert" aria-label="Close Button">
                        <span class="icon-[tabler--x] size-5"></span>
                    </button>
                </div>
            @endif
        </div>
    </div>
</div>