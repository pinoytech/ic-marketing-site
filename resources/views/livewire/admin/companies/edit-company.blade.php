<div>
  <flux:modal name="edit-company" class="md:w-256" flyout>
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Update company</flux:heading>
              <flux:text class="mt-2">Make changes to your company details.</flux:text>
          </div>

          <flux:input label="Name" wire:model='name' placeholder="Company name" />
          <label class="block text-sm font-medium text-white">Logo Image</label>
          <input type="file" wire:model="logo" class="block w-full text-sm text-gray-500
            file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-teal-50 file:text-teal-700
            hover:file:bg-teal-100
          "/>
          <div wire:loading wire:target="logo" class="text-sm text-gray-500">Uploading...</div>
          @error('logo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          @if ($logo)
            <img src="{{ $logo->temporaryUrl() }}" class="w-1/2" alt="Preview">
          @elseif ($this->logo_path)
            <img src="{{ Storage::disk('resource')->url($this->logo_path) }}" class="w-1/2" alt="Current photo">
          @endif
          <flux:input label="Display Order" wire:model='display_order' type="number" />
          <flux:checkbox label="Featured" wire:model='featured' />

          <div class="flex gap-4">
            <flux:spacer />
            <flux:button type="submit" variant="primary" wire:click="update">
              Save changes
            </flux:button>
            <flux:modal.close>
              <flux:button variant="outline">Cancel</flux:button>
            </flux:modal.close>
          </div>
      </div>
  </flux:modal>
</div>
