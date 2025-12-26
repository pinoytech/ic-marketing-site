<div>
  <flux:modal name="edit-medium" class="md:w-256" flyout>
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Update medium</flux:heading>
              <flux:text class="mt-2">Make changes to your medium details.</flux:text>
          </div>

          <flux:input label="Title" wire:model='title' placeholder="Medium title" />
          <flux:textarea label="Content" wire:model='content' placeholder="Medium content" rows="4" />
          <flux:select label="Type" wire:model="type" placeholder="Choose type...">
              <flux:select.option>Audio</flux:select.option>
              <flux:select.option>Podcast</flux:select.option>
              <flux:select.option>Video</flux:select.option>
          </flux:select>
          <label class="block text-sm font-medium text-white">Image</label>
          <input type="file" wire:model="image_file" class="block w-full text-sm text-gray-500
            file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-teal-50 file:text-teal-700
            hover:file:bg-teal-100
          "/>
          <div wire:loading wire:target="image_file" class="text-sm text-gray-500">Uploading...</div>
          @error('image_file') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          @if ($image_file)
            <small class="text-gray-400">New image selected</small>
            <img src="{{ $image_file->temporaryUrl() }}" class="w-1/2" alt="Preview">
          @elseif ($image && $image->path)
            <img src="{{ Storage::disk('resource')->url($image->path) }}" class="w-1/2" alt="Current photo">
          @endif
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
          <flux:input label="Link URL" wire:model='link' placeholder="http://example.com/link" />
          <flux:input label="Published date" wire:model='published_date' type="date" />
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
