<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input wire:model="email" class="form-control" name="email" type="email">
            @error('password')
                <div class="is-invalid">
                    {{ $message }}
                </div>
            @enderror
            <label for="password" class="form-label">Password</label>
            <input wire:model="password" name="password" class="form-control" type="password">
            @error('password')
                <div class="is-invalid">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
</div>
