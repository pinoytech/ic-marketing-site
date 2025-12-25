<div>
  <flux:modal name="edit-post" class="md:w-256" flyout>
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Update post</flux:heading>
              <flux:text class="mt-2">Make changes to your post details.</flux:text>
          </div>

          <flux:input label="Title" wire:model='title' placeholder="Post title" />
          <flux:textarea label="Content" wire:model='content' placeholder="Post content" rows="4" />
          <flux:input label="Author" wire:model='author' placeholder="Author name" />
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
          {{-- @if ($resource_image)
            <img src="#" id="preview-image" class="w-1/2" alt="Preview" style="display: none;">
            <script>
              document.addEventListener('livewire:init', () => {
                Livewire.hook('morph.updated', ({ el, component }) => {
                  const input = document.querySelector('input[type="file"][wire\\:model="resource_image"]');
                  const preview = document.getElementById('preview-image');
                  
                  if (input && input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                      preview.src = e.target.result;
                      preview.style.display = 'block';
                    };
                    reader.readAsDataURL(input.files[0]);
                  }
                });
              });
            </script>
          @elseif ($this->resource_image_path)
            <img src="{{ Storage::disk('resource')->url($this->resource_image_path) }}" class="w-1/2" alt="Current photo">
          @endif --}}
          @if ($resource_image)
            <img src="{{ $resource_image->temporaryUrl() }}" class="w-1/2" alt="Preview">
          @elseif ($this->resource_image_path)
            <img src="{{ Storage::disk('resource')->url($this->resource_image_path) }}" class="w-1/2" alt="Current photo">
          @endif
          {{-- @if ($this->resource_image_path && !$resource_image)
            <img src="{{ Storage::disk('resource')->url($this->resource_image_path) }}" class="w-1/2" alt="Current photo">
          @endif
          <small class="text-gray-400">@if($resource_image) New image selected @endif</small> --}}
          <flux:input label="Image URL" wire:model='image' placeholder="http://example.com/image.jpg" />
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
