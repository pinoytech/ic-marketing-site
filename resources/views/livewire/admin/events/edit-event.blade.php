<div>
  <flux:modal name="edit-event" class="md:w-256" flyout>
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Update event</flux:heading>
              <flux:text class="mt-2">Make changes to your event details.</flux:text>
          </div>

          <flux:input label="Title" wire:model='title' placeholder="Event title" />
          <flux:textarea label="Description" wire:model='description' placeholder="Event description" rows="4" />
          <flux:input label="Register link" wire:model='register_link' placeholder="http://example.com/register" />
          <flux:input label="Watch link" wire:model='watch_link' placeholder="http://example.com/watch" />
          <label class="block text-sm font-medium text-white">Resource Image</label>
          <input type="file" wire:model="resource_image" class="block w-full text-sm text-gray-500
            file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-teal-50 file:text-teal-700
            hover:file:bg-teal-100
          "/>
          <div wire:loading wire:target="resource_image" class="text-sm text-gray-500">Uploading...</div>
          @error('resource_image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          @if ($resource_image)
            <img src="{{ $resource_image->temporaryUrl() }}" class="w-1/2" alt="Preview">
          @elseif ($this->resource_image_path)
            <img src="{{ Storage::disk('resource')->url($this->resource_image_path) }}" class="w-1/2" alt="Current photo">
          @endif
          <flux:input label="Image URL" wire:model='image' placeholder="http://example.com/image.jpg" />
          <flux:input label="Event date" wire:model='event_webinar_date' type="date" />
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
